<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Earthquake;
use models\moves\HeavySlam;
use models\moves\IronTail;
use models\moves\MudShot;
use models\moves\MudSlap;

class Steelix extends Pokemon
{
    protected array $type = ["steel", "ground"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => MudSlap::class,
            5 => IronTail::class,
            31 => MudShot::class,
            56 => BulletPunch::class,
            80 => HeavySlam::class,
            90 => Earthquake::class
        ];
    }
}