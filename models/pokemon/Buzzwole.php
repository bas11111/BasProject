<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BugBuzz;
use models\moves\BulletSeed;
use models\moves\HornAttack;

class Buzzwole extends Pokemon
{
    protected int $health = 455;
    protected int $maxHealth = 455;
    protected int $CP = 3670;
    protected array $type = ["bug"];

    public function getWeakAgainst(): array
    {
        return ["fire", "rock", "fly", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new BugBite(), new BulletSeed(), new HornAttack(), new BugBuzz()];
    }
}