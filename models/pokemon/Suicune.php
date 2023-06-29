<?php

namespace models\pokemon;

use models\moves\HydroPump;
use models\moves\IceFang;
use models\moves\IceKick;
use models\moves\Snarl;
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
        return [
            1 => IceKick::class,
            19 => Snarl::class,
            31 => WaterGun::class,
            50 => IceFang::class,
            61 => Waterfall::class,
            80 => HydroPump::class
        ];
    }
}