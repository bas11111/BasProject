<?php

namespace models\pokemon;

use models\moves\Avalanche;
use models\moves\Cut;
use models\moves\HornAttack;
use models\moves\IceFang;
use models\moves\IceKick;
use models\moves\WaterGun;

class Glastrier extends Pokemon
{
    protected array $type = ["ice"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => IceKick::class,
            14 => Cut::class,
            32 => HornAttack::class,
            45 => WaterGun::class,
            60 => IceFang::class,
            80 => Avalanche::class
        ];
    }
}