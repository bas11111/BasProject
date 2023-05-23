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

    public function getAvailableMoves(): array
    {
        return ["BugBite", "BulletSeed", "StruggleBug", "BugBuzz"];
    }
}