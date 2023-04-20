<?php

namespace models\pokemon;

use models\moves\DragonBreath;
use models\moves\HydroPump;
use models\moves\Snarl;
use models\moves\WaterGun;

class Gyarados extends Pokemon
{
    protected array $type = ["water", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["DragonBreath", "WaterGun", "Snarl", "HydroPump"];
    }
}