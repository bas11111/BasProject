<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Cut;
use models\moves\Earthquake;
use models\moves\Gust;
use models\moves\Hurricane;
use models\moves\MudShot;
use models\moves\MudSlap;

class Landorus extends Pokemon
{
    protected array $type = ["ground", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => MudSlap::class,
            6 => Cut::class,
            21 => AirSlash::class,
            35 => MudShot::class,
            46 => Gust::class,
            80 => Earthquake::class,
            90 => Hurricane::class
        ];
    }
}