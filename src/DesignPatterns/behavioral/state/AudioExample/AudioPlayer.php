<?php declare(strict_types=1);

use JetBrains\PhpStorm\Pure;

class AudioPlayer
{
    private CashState $state;

    private bool $playing;

    #[Pure] public function __construct()
    {
        $this->state = new ReadyState($this);
    }

    public function changeState(CashState $state): void
    {
        $this->state = $state;
    }

    public function startPlaying(): void
    {
        // start playing!
    }

    public function nextSong(): void
    {
        // play next song!
    }

    public function previousSong(): void
    {
        // play previous song!
    }

    public function fastForward(int $tempo): void
    {
        // play faster!
    }

    public function rewind(int $tempo)
    {
        // rewind!
    }

    public function isPlaying(): bool
    {
        return $this->playing;
    }
}