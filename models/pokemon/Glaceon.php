<?php

namespace models\pokemon;

use models\moves\Avalanche;
use models\moves\IceFang;
use models\moves\IceKick;
use models\moves\Snarl;
use models\moves\WaterGun;

class Glaceon extends Pokemon
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
            31 => Snarl::class,
            50 => IceFang::class,
            66 => WaterGun::class,
            80 => Avalanche::class
        ];
    }
}