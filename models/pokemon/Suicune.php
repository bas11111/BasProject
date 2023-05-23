<?php

namespace models\pokemon;

use models\moves\HydroPump;
use models\moves\IceKick;
use models\moves\Waterfall;
use models\moves\WaterGun;

class Suicune extends Pokemon
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
        return ["WaterGun", "IceKick", "Waterfall", "HydroPump"];
    }
}