<?php

namespace models\pokemon;

use models\moves\VoltSwitch;
use models\moves\Snarl;
use models\moves\Spark;
use models\moves\ThunderBolt;

class Raikou extends Pokemon
{
    protected array $type = ["electric"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return ["Spark", "VoltSwitch", "Snarl", "ThunderBolt"];
    }
}