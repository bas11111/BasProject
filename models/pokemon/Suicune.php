<?php

namespace models\pokemon;

use models\moves\HydroPump;
use models\moves\IceKick;
use models\moves\Snarl;
use models\moves\WaterGun;

class Suicune extends Pokemon
{
    protected int $health = 381;
    protected int $maxHealth = 381;
    protected int $CP = 3147;
    protected array $type = ["water"];

    public function getWeakAgainst(): array
    {
        return ["electric", "grass", "ice", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new WaterGun(), new IceKick(), new Snarl(), new HydroPump()];
    }
}