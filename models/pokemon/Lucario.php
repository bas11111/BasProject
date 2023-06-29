<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Counter;
use models\moves\Cut;
use models\moves\FocusBlast;
use models\moves\HeavySlam;
use models\moves\IronTail;
use models\moves\RockSmash;

class Lucario extends Pokemon
{
    protected array $type = ["fighting"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Counter::class,
            6 => Cut::class,
            16 => BulletPunch::class,
            30 => IronTail::class,
            55 => RockSmash::class,
            80 => FocusBlast::class,
            90 => HeavySlam::class
        ];
    }
}