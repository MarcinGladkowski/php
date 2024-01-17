<?php declare(strict_types=1);

class Directory implements FileSystemElementInterface
{
    private string $id;

    /** @var FileSystemElementInterface[]  */
    private array $elements = [];

    public function __construct()
    {
        $this->id = uniqid('', true);
    }

    public function getSize(): int
    {
        $size = 0;

        foreach ($this->elements as $element) {
            $size += $element->getSize();
        }

        return $size;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function addElement(FileSystemElementInterface $element): void
    {
        $this->elements[$element->getId()] = $element;
    }
}