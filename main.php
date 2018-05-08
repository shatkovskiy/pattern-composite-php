<?php

function __autoload($class)
{
    require $class . '.php';
}

$soldierA = new Soldier(1);
$soldierB = new Soldier(3);
$soldierC = new Soldier(2);

$squadAlpha = new Squad();
$squadAlpha->addUnit($soldierA);
$squadAlpha->addUnit($soldierB);

$squadDelta = new Squad();
$squadDelta->addUnit($soldierC);
$squadDelta->addUnit($squadAlpha);

$army = new Squad();
$army->addUnit($squadDelta);
$army->addUnit(new Soldier(1));
$army->addUnit(new Soldier(2));

$armyPower = $army->getPower();

echo ("Army power is: $armyPower");