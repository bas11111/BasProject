<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Counter;
use models\moves\FireBreath;
use models\moves\FlameBlast;
use models\moves\FocusBlast;
use models\moves\Incinerate;
use models\moves\RockSmash;

class Blaziken extends Pokemon
{
    protected array $type = ["fire", "fighting"];
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
            5 => RockSmash::class,
            17 => FireBreath::class,
            37 => Incinerate::class,
            50 => BulletPunch::class,
            80 => FocusBlast::class,
            90 => FlameBlast::class
        ];
    }
}