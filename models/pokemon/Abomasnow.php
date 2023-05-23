<?php

namespace models\pokemon;

use models\moves\Avalanche;
use models\moves\IceFang;
use models\moves\BulletSeed;
use models\moves\IceKick;

class Abomasnow extends Pokemon
{
    protected array $type = ["ice", "grass"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["IceKick", "IceFang", "BulletSeed", "Avalance"];
    }
}