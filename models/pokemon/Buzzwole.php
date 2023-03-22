<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BugBuzz;
use models\moves\BulletSeed;
use models\moves\HornAttack;

class Buzzwole extends Pokemon
{

    public function getWeakAgainst(): array
    {
        return ["fire", "rock", "fly"];
    }

    public function getMoves(): array
    {
        return [new BugBite(), new BulletSeed(), new HornAttack(), new BugBuzz()];
    }

    public function getCombatPower(): int
    {
        return 3670;
    }

    public function getChargedAttack(): int
    {
        return 110;
    }
}