<?php

namespace models\pokemon;

use models\moves\Hex;
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

    public function getMoves(): array
    {
        return [new Spark(), new Hex, new Snarl(), new ThunderBolt()];
    }
}