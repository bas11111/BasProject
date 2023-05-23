<?php

namespace models\pokemon;

use models\moves\MudShot;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\StoneEdge;

class Rhyperior extends Pokemon
{
    protected array $type = ["rock", "ground"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["RockThrow", "MudSlap", "MudShot", "StoneEdge"];
    }
}