<?php

namespace models\pokemon;

use models\moves\Counter;
use models\moves\Cut;
use models\moves\FocusBlast;
use models\moves\HiddenPower;
use models\moves\RockSmash;

class Hariyama extends Pokemon
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
            1 => Cut::class,
            30 => Counter::class,
            40 => HiddenPower::class,
            55 => RockSmash::class,
            80 => FocusBlast::class,
        ];
    }
}