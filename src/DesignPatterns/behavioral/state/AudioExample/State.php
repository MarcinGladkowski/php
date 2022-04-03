<?php

abstract class State
{
    protected AudioPlayer $player;

    public function __construct(
        AudioPlayer $audioPlayer
    ) {
        $this->player = $audioPlayer;
    }

    abstract public function clickLock(): void;
    abstract public function clickPlay(): void;
    abstract public function clickNext(): void;
    abstract public function clickPrevious(): void;
}
