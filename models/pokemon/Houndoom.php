<?php

namespace models\pokemon;

use models\moves\Snarl;
use models\moves\FireBreath;
use models\moves\FeintAttack;
use models\moves\DarkPulse;

class Houndoom extends Pokemon
{
    protected array $type = ["dark", "fire"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["Snarl", "Firebreath", "FeintAttack", "DarkPulse"];
    }
}