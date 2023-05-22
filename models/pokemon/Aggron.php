<?php

namespace models\pokemon;

use models\moves\RockThrow;
use models\moves\BulletPunch;
use models\moves\MudSlap;
use models\moves\StoneEdge;

class Aggron extends Pokemon
{
    protected array $type = ["rock", "steel"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["RockThrow", "BulletPunch", "MudSlap", "StoneEdge"];
    }
}