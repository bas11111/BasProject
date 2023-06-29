<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\HeavySlam;
use models\moves\IronTail;
use models\moves\RockSmash;

class Dialga extends Pokemon
{
    protected array $type = ["steel", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => BulletPunch::class,
            11 => IronTail::class,
            30 => DragonBreath::class,
            41 => DragonTail::class,
            65 => RockSmash::class,
            80 => HeavySlam::class,
            90 => DracoMeteor::class
        ];
    }
}