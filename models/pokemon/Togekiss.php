<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\AirSlash;
use models\moves\FairyWind;
use models\moves\DazzlingDream;

class Togekiss extends Pokemon
{
    protected array $type = ["fairy", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return ["Charm", "Airslash", "FairyWind", "DazzlingDream"];
    }
}