<?php

class Squad implements CompositeUnitInterface
{
    /**
     * @var CompositeUnitInterface[] $content
     */
    private $content;

    /**
     * Squad constructor.
     */
    public function __construct()
    {
        $this->content = [];
    }

    /**
     * @param CompositeUnitInterface $unit
     */
    public function addUnit(CompositeUnitInterface $unit)
    {
        $this->content[] = $unit;
    }

    /**
     * @return int
     */
    public function getPower() : int
    {
        $totalPower = 0;

        foreach ($this->content as $unit)
        {
            $totalPower += $unit->getPower();
        }

        return $totalPower;
    }
}
