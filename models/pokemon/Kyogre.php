<?php

namespace models\pokemon;

use models\moves\WaterGun;
use models\moves\IceKick;
use models\moves\Snarl;
use models\moves\HydroPump;

class Kyogre extends Pokemon
{
    protected array $type = ["water"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["WaterGun", "IceKick", "Snarl", "HydroPump"];
    }
}