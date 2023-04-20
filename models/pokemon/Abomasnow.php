<?php

namespace models\pokemon;

use models\moves\Avalanche;
use models\moves\BulletSeed;
use models\moves\DragonBreath;
use models\moves\IceKick;
use models\moves\Move;

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
        return ["IceKick", "BulletSeed", "DragonBreath", "Avalance"];
    }
}