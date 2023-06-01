<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\Hurricane;

class Rayquaza extends Pokemon
{
    protected array $type = ["dragon", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return ["AirSlash", "DragonBreath", "Dragontail", "Hurricane"];
    }
}