<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BugBuzz;
use models\moves\BulletSeed;
use models\moves\RockThrow;
use models\moves\Rollout;
use models\moves\StruggleBug;

class Pinsir extends Pokemon
{
    protected array $type = ["bug"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => BugBite::class,
            20 => RockThrow::class,
            34 => BulletSeed::class,
            50 => Rollout::class,
            61 => StruggleBug::class,
            80 => BugBuzz::class
        ];
    }
}