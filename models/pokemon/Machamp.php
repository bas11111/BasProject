<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Counter;
use models\moves\Cut;
use models\moves\FocusBlast;
use models\moves\IronTail;
use models\moves\RockSmash;

class Machamp extends Pokemon
{
    protected array $type = ["fighting"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Counter::class,
            11 => Cut::class,
            35 => IronTail::class,
            51 => RockSmash::class,
            65 => BulletPunch::class,
            80 => FocusBlast::class
        ];
    }
}