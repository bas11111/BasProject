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

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Confusion",
            23 => "ZenHeadButt",
            40 => "FairyWind",
            53 => "Charm",
            80 => "DazzlingDream"
        ];
    }
}