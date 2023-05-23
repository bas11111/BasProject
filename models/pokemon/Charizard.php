<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Incinerate;
use models\moves\FireBreath;
use models\moves\FlameBlast;

class Charizard extends Pokemon
{
    protected array $type = ["fire"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["FireBreath", "AirSlash", "Incinerate", "FlameBlast"];
    }
}