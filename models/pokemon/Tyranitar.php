<?php

namespace models\pokemon;

use models\moves\Rollout;
use models\moves\RockThrow;
use models\moves\Snarl;
use models\moves\StoneEdge;

class Tyranitar extends Pokemon
{
    protected array $type = ["rock", "dark"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return ["RockThrow", "Snarl", "Rollout", "StoneEdge"];
    }
}