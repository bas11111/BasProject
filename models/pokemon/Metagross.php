<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Confusion;
use models\moves\Cut;
use models\moves\FutureSight;
use models\moves\HeavySlam;
use models\moves\IronTail;
use models\moves\ZenHeadbutt;

class Metagross extends Pokemon
{
    protected array $type = ["steel", "psychic"];
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
            15 => ZenHeadbutt::class,
            21 => Cut::class,
            45 => Confusion::class,
            60 => IronTail::class,
            80 => FutureSight::class,
            90 => HeavySlam::class
        ];
    }
}