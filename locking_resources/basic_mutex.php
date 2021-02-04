<?php

$lockfile = '/var/run/lock/mytestprocess.lock';
getLock($lockfile);
echo 'Doing some really intense work' . PHP_EOL;
sleep(10);
echo 'Done' . PHP_EOL;


function getLock(string $lockfile) : void
{
    while (checkLock($lockfile) === false) {
        // Just spin until the lock opens
        echo 'Waiting for lock...' . PHP_EOL;
        sleep(1);
    }
}


function checkLock(string $lockfile): bool
{
    $pid = (string)getmypid();
    if (!file_exists($lockfile)) {
        file_put_contents($lockfile, $pid);
    }
    if (file_exists($lockfile)
        && file_get_contents($lockfile) !== $pid) {
        return false;
    }
    if (file_exists($lockfile) && file_get_contents($lockfile) === $pid) {
        return true;
    }
    return false;
}
