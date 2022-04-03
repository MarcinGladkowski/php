<?php

class ReadyState extends CashState
{
    public function clickLock(): void
    {
        $this->player->changeState(new LockedState($this->player));
    }

    public function clickPlay(): void
    {
        $this->player->changeState(new PlayingState($this->player));
    }

    public function clickNext(): void
    {
        $this->player->nextSong();
    }

    public function clickPrevious(): void
    {
        $this->player->previousSong();
    }
}