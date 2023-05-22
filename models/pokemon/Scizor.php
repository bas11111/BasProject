<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BulletSeed;
use models\moves\AirSlash;
use models\moves\BugBuzz;

class Scizor extends Pokemon
{
    protected array $type = ["Bugg", "Steel"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["BugBite", "Bulletseed", "Airslash", "BugBuzz"];
    }
}