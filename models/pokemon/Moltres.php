<?php

namespace models\pokemon;

use models\moves\FireBreath;
use models\moves\AirSlash;
use models\moves\Incinerate;
use models\moves\FlameBlast;

class Moltres extends Pokemon
{
    protected array $type = ["fire", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return ["FireBreath", "Airslash", "Incinerate", "FlameBlast"];
    }
}