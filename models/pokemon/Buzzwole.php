<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BugBuzz;
use models\moves\BulletSeed;
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

    public static function getAvailableMoves(): array
    {
        return [
            1 => "BugBite",
            8 => "StruggleBug",
            17 => "BulletSeed",
            24 => "MagicalLeaf",
            55 => "PoisonJab",
            80 => "BugBuzz",
            90 => "SolarBeam"
        ];
    }
}