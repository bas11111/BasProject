<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Avalanche;
use models\moves\IceKick;
use models\moves\IceFang;

class Articuno extends Pokemon
{
    protected array $type = ["ice", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["AirSlash", "IceFang", "IceKick", "Avalance"];
    }
}