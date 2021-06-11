<?php declare(strict_types=1);

class File implements FileSystemElementInterface
{
    private string $id;

    private int $size;

    public function __construct(int $size)
    {
        $this->id = uniqid('', true);
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getId(): string
    {
        return $this->id;
    }
}