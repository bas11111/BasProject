<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\BugBite;
use models\moves\BugBuzz;
use models\moves\Gust;
use models\moves\Hurricane;
use models\moves\StruggleBug;

class Yanmega extends Pokemon
{
    protected array $type = ["bug", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => BugBite::class,
            13 => AirSlash::class,
            34 => StruggleBug::class,
            60 => Gust::class,
            80 => Hurricane::class,
            90 => BugBuzz::class
        ];
    }
}