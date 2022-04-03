<?php declare(strict_types=1);

class PlayingState extends CashState
{
    public function clickLock(): void
    {
        $this->player->changeState(new LockedState($this->player));
    }

    public function clickPlay(): void
    {
        $this->player->changeState(new ReadyState($this->player));
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