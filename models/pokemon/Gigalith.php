<?php

namespace models\pokemon;

use models\moves\Rollout;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\StoneEdge;

class Gigalith extends Pokemon
{
    protected array $type = ["rock"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function getAvailableMoves(): array
    {
        return ["RockThrow", "MudSlap", "Rollout", "StoneEdge"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}