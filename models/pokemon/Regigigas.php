<?php

namespace models\pokemon;

use models\moves\Counter;
use models\moves\Cut;
use models\moves\HiddenPower;
use models\moves\HornAttack;
use models\moves\Snarl;

class Regigigas extends Pokemon
{
    protected array $type = ["normal"];
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
            23 => HiddenPower::class,
            50 => Counter::class,
            64 => Snarl::class,
            80 => HornAttack::class
        ];
    }
}