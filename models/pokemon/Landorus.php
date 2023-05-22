<?php

namespace models\pokemon;

use models\moves\MudSlap;
use models\moves\AirSlash;
use models\moves\DragonBreath;
use models\moves\Earthquake;

class Landorus extends Pokemon
{
    protected array $type = ["ground", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["MudSlap", "AirSlash", "DragonBreath", "Earthquake"];
    }
}