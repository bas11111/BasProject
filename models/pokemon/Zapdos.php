<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\VoltSwitch;
use models\moves\Spark;
use models\moves\ThunderBolt;

class Zapdos extends Pokemon
{
    protected array $type = ["electric", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return ["AirSlash", "Spark", "VoltSwitch", "ThunderBolt"];
    }
}