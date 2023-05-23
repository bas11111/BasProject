<?php

namespace models\pokemon;

use models\moves\FeintAttack;
use models\moves\DarkPulse;
use models\moves\Hex;
use models\moves\Snarl;

class Darkrai extends Pokemon
{
    protected array $type = ["dark"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function getAvailableMoves(): array
    {
        return ["Snarl", "Hex", "FeintAttack", "DarkPulse"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}