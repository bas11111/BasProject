<?php

namespace models\pokemon;

use models\moves\Hex;
use models\moves\Snarl;
use models\moves\Spark;
use models\moves\ThunderBolt;

class Raikou extends Pokemon
{
    protected int $health = 390;
    protected int $maxHealth = 390;
    protected int $CP = 3660;
    protected array $type = ["electric"];
    protected int $shields = 2;

    public function getWeakAgainst(): array
    {
        return ["ground", "dragon", "grass", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new Spark(), new Hex, new Snarl(), new ThunderBolt()];
    }
}