<?php

class Ship
{
    public bool $broken = false;
}

class ShipsCollection implements \ArrayAccess, \IteratorAggregate
{
    /**
     * @var Ship[]
     */
    private array $ships;

    public function __construct(array $ships)
    {
        $this->ships = $ships;
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->ships);
    }

    public function offsetGet($offset)
    {
        return $this->ships[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->ships[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->ships[$offset]);
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->ships);
    }

    /**
     * Why we done it ?
     * We cannot add some methods to array but
     * creating an ArrayIterator we can manage
     * the content of this structure of data.
     */
    public function removeAllBrokenShips(): void
    {
        foreach ($this->ships as $key => $ship) {
            if($ship->broken) {
                unset($this->ships[$key]);
            }
        }
    }
}

$shipsCollection = new ShipsCollection([new Ship(), new Ship()]);

$brokenShip = new Ship();
$brokenShip->broken = true;

$shipsCollection[] = $brokenShip;

foreach ($shipsCollection as $ship) {
    var_dump($ship);
}

$shipsCollection->removeAllBrokenShips();
echo 'After remove broken broken ships' . PHP_EOL;

foreach ($shipsCollection as $ship) {
    var_dump($ship);
}





