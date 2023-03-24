<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BugBuzz;
use models\moves\BulletPunch;
use models\moves\BulletSeed;
use models\moves\Counter;

class Pinsir extends Pokemon
{
    protected int $health = 334;
    protected int $maxHealth = 334;
    protected int $CP = 3119;
    protected array $type = ["bug"];

    public function getWeakAgainst(): array
    {
        return ["fire", "fly", "rock", "legendary"];
    }

    public function getMoves(): array
    {
        return [new BugBite(), new BulletSeed(), new Counter(), new BugBuzz()];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }
}