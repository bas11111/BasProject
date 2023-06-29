<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BugBuzz;
use models\moves\BulletPunch;
use models\moves\HeavySlam;
use models\moves\IronTail;
use models\moves\PoisonJab;
use models\moves\StruggleBug;

class Scizor extends Pokemon
{
    protected array $type = ["bug", "steel"];
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
            9 => BulletPunch::class,
            21 => StruggleBug::class,
            35 => IronTail::class,
            55 => PoisonJab::class,
            80 => HeavySlam::class,
            90 => BugBuzz::class,
        ];
    }
}