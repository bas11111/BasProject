<?php

namespace models\pokemon;

use models\moves\BugBuzz;
use models\moves\BulletSeed;
use models\moves\MagicalLeaf;
use models\moves\SolarBeam;
use models\moves\StruggleBug;

class Leafeon extends Pokemon
{
    protected array $type = ["grass"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => BugBuzz::class,
            21 => BulletSeed::class,
            46 => StruggleBug::class,
            61 => MagicalLeaf::class,
            80 => SolarBeam::class,
        ];
    }
}