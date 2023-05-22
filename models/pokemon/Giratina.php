<?php

namespace models\pokemon;

use models\moves\Hex;
use models\moves\Snarl;
use models\moves\DragonBreath;
use models\moves\Poltergeist;

class Giratina extends Pokemon
{
    protected array $type = ["ghost", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["Hex", "Snarl", "DragonBreath", "Poltergeist"];
    }
}