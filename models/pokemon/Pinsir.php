<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BugBuzz;
use models\moves\BulletSeed;
use models\moves\Counter;

class Pinsir extends Pokemon
{
    protected array $type = ["bug"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new BugBite(), new BulletSeed(), new Counter(), new BugBuzz()];
    }
}