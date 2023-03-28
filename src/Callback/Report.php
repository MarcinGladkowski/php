<?php

/**
 * @source https://freek.dev/2451-make-more-things-the-same
 */
class Report
{
    protected $handleFailure;

    public function __construct()
    {
        $this->throwFailures();
    }


    public function handleFailure(callable $callback): void
    {
        $this->handleFailure = $callback;
    }

    public function logFailures(): void
    {
        $this->handleFailure(static function (Exception $exception) {
            // log
        });
    }

    public function throwFailures(): void
    {
        $this->handleFailure(static function (Exception $exception) {
            throw $exception;
        });
    }

    public function handle(Exception $exception): void
    {
        call_user_func($this->handleFailure, $exception);
    }
}