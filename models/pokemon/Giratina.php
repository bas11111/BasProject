<?php

namespace models\pokemon;

use models\moves\Hex;
use models\moves\Astonish;
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

    public static function getAvailableMoves(): array
    {
        return ["Hex", "Astonish", "DragonBreath", "Poltergeist"];
    }
}