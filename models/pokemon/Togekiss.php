<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Charm;
use models\moves\Confusion;
use models\moves\DazzlingDream;
use models\moves\FairyWind;
use models\moves\Gust;
use models\moves\Hurricane;

class Togekiss extends Pokemon
{
    protected array $type = ["fairy", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Charm::class,
            11 => Confusion::class,
            32 => AirSlash::class,
            45 => FairyWind::class,
            60 => Gust::class,
            80 => DazzlingDream::class,
            90 => Hurricane::class
        ];
    }
}