<?php

class LockedState extends CashState
{
    public function clickLock(): void
    {
        if ($this->player->isPlaying()) {
            $this->player->changeState(new LockedState($this->player));
        } else {
            $this->player->changeState(new ReadyState($this->player));
        }
    }

    public function clickPlay(): void
    {
        // Locked, so do nothing
    }

    public function clickNext(): void
    {
        // Locked, so do nothing
    }

    public function clickPrevious(): void
    {
        // Locked, so do nothing
    }
}