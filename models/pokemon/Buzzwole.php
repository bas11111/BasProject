<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BugBuzz;
use models\moves\BulletSeed;
use models\moves\MagicalLeaf;
use models\moves\PoisonJab;
use models\moves\SolarBeam;
use models\moves\StruggleBug;

class Buzzwole extends Pokemon
{
    protected array $type = ["bug"];
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
            8 => StruggleBug::class,
            17 => BulletSeed::class,
            24 => MagicalLeaf::class,
            55 => PoisonJab::class,
            80 => BugBuzz::class,
            90 => SolarBeam::class
        ];
    }
}