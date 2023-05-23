<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\Confusion;
use models\moves\DazzlingDream;
use models\moves\FairyWind;

class Gardevoir extends Pokemon
{
    protected array $type = ["fairy", "psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["Charm", "Confusion", "FairyWind", "DazzlingDream"];
    }
}