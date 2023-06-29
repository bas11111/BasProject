<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\HeavySlam;
use models\moves\IronTail;
use models\moves\RockThrow;
use models\moves\Rollout;
use models\moves\StoneEdge;

class Aggron extends Pokemon
{
    protected array $type = ["rock", "steel"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => BulletPunch::class,
            6 => IronTail::class,
            20 => Rollout::class,
            40 => RockThrow::class,
            80 => HeavySlam::class,
            90 => StoneEdge::class,
            ];
    }
}