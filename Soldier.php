<?php

class Soldier implements CompositeUnitInterface
{
    /**
     * @var int
     */
    private $power;

    /**
     * Soldier constructor.
     * @param int $power
     */
    public function __construct(int $power)
    {
        $this->power = $power;
    }

    /**
     * @return int
     */
    public function getPower() : int
    {
        return $this->power;
    }
}
