<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BugBuzz;
use models\moves\BulletPunch;
use models\moves\BulletSeed;
use models\moves\Counter;

class Pinsir extends Pokemon
{
    protected array $type = ["bug"];
    protected int $shields = 2;


    public function getMoves(): array
    {
        return [new BugBite(), new BulletSeed(), new Counter(), new BugBuzz()];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }
}