<?php

namespace models\pokemon;

use models\moves\Cut;
use models\moves\HydroPump;
use models\moves\IceKick;
use models\moves\Waterfall;
use models\moves\WaterGun;

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
        return [
            1 => Cut::class,
            4 => WaterGun::class,
            21 => IceKick::class,
            45 => Waterfall::class,
            80 => HydroPump::class
        ];
    }
}