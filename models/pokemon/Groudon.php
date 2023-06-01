<?php

namespace models\pokemon;

use models\moves\DragonBreath;
use models\moves\Earthquake;
use models\moves\MudShot;
use models\moves\MudSlap;

class Groudon extends Pokemon
{
    protected array $type = ["ground"];
    protected int $shields = 2;
    protected int $potions = 2;

    public static function getAvailableMoves(): array
    {
        return ["MudSlap", "DragonBreath", "MudShot", "Earthquake"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}