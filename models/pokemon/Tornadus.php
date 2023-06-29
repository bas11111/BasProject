<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Cut;
use models\moves\Gust;
use models\moves\Hurricane;
use models\moves\Snarl;

class Tornadus extends Pokemon
{
    protected array $type = ["fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => AirSlash::class,
            12 => Snarl::class,
            28 => Cut::class,
            40 => Gust::class,
            80 => Hurricane::class
        ];
    }
}