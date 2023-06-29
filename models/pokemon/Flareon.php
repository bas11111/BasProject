<?php

namespace models\pokemon;

use models\moves\Counter;
use models\moves\Cut;
use models\moves\FireBreath;
use models\moves\FlameBlast;
use models\moves\Incinerate;
use models\moves\Snarl;

class Flareon extends Pokemon
{
    protected array $type = ["fire"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Cut::class,
            4 =>  FireBreath::class,
            21 => Snarl::class,
            37 => Counter::class,
            56 => Incinerate::class,
            80 => FlameBlast::class,
        ];
    }
}