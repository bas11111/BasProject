<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Earthquake;
use models\moves\HeavySlam;
use models\moves\IronTail;
use models\moves\MudShot;
use models\moves\MudSlap;
use models\moves\RockThrow;

class Excadrill extends Pokemon
{
    protected array $type = ["ground", "steel"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => MudSlap::class,
            18 => RockThrow::class,
            39 => BulletPunch::class,
            51 => MudShot::class,
            67 => IronTail::class,
            80 => Earthquake::class,
            90 => HeavySlam::class
        ];
    }
}