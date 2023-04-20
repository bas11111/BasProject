<?php

namespace models\pokemon;

use models\moves\Avalanche;
use models\moves\Cut;
use models\moves\IceKick;
use models\moves\MudSlap;

class Glastrier extends Pokemon
{
    protected array $type = ["ice"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function getAvailableMoves(): array
    {
        return ["IceKick", "Cut", "MudSlap", "Avalanche"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}