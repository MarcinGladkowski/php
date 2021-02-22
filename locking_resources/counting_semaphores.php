<?php

/**
 * Counting semaphores
 *
 * Example:
 * - maximum of concurrent connections to API - max 5 the others in the same time will wait
 * - based on ID (for example: client api)
 * - max concurrent (second parameter in sem_get())
 *
 *
 * Docker and PHP install extension: RUN docker-php-ext-install sysvmsg sysvsem sysvsem
 */
class ThirdPartyAPI
{
    /**
     * Semaphore keys are identified by integers
     */
    protected int $semaphoreKey = 827623782;
    /**
     * The ID of a specific semaphore we generate using the key
     */
    protected $semaphoreId;
    protected int $concurrentConnections = 5;

    public function __construct()
    {
        $this->semaphoreId = sem_get(
            $this->semaphoreKey, $this->concurrentConnections
        );
    }

    public function getData(array $query): array
    {
        sem_acquire($this->semaphoreId);
        echo 'Doing the work...' . PHP_EOL;
        sleep(60);
        sem_release($this->semaphoreId);
        return [];
    }
}

$api = new ThirdPartyAPI();
$api->getData(['name' => 'phparch']);