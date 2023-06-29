<?php

namespace models\pokemon;

use models\moves\Cut;
use models\moves\HydroPump;
use models\moves\Snarl;
use models\moves\Waterfall;
use models\moves\WaterGun;

class Vaporeon extends Pokemon
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
            1 => Snarl::class,
            6 => WaterGun::class,
            31 => Cut::class,
            55 => Waterfall::class,
            80 => HydroPump::class
        ];
    }
}