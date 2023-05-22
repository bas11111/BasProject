<?php

namespace models\pokemon;

use models\moves\IceKick;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\Avalanche;

class Mamoswine extends Pokemon
{
    protected array $type = ["ice", "ground"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["Icekick", "MudSlap", "RockThrow", "Avalanche"];
    }
}