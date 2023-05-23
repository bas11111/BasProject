<?php

namespace models\pokemon;

use models\moves\Counter;
use models\moves\Confusion;
use models\moves\RockSmash;
use models\moves\FutureSight;

class Gallade extends Pokemon
{
    protected array $type = ["fighting", "psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["Counter", "Confusion", "RockSmash", "FutureSight"];
    }
}