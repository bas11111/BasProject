<?php

namespace models\pokemon;

use models\moves\Astonish;
use models\moves\DarkPulse;
use models\moves\FeintAttack;
use models\moves\Hex;
use models\moves\Snarl;

class Darkrai extends Pokemon
{
    protected array $type = ["dark"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function getAvailableMoves(): array
    {
        return [
            1 => Snarl::class,
            4 => FeintAttack::class,
            25 => Hex::class,
            65 => Astonish::class,
            70 => DarkPulse::class
        ];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}