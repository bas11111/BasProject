<?php

namespace models\pokemon;

use models\moves\DragonBreath;
use models\moves\Earthquake;
use models\moves\FireBreath;
use models\moves\MudSlap;

class Garchomp extends Pokemon
{
    protected array $type = ["dragon", "ground"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["DragonBreath", "MudSlap", "FireBreath", "Earthquake"];
    }
}