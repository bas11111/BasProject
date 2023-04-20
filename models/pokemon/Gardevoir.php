<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\Confusion;
use models\moves\DazzlingDream;
use models\moves\Hex;

class Gardevoir extends Pokemon
{
    protected array $type = ["fairy", "psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new Charm(), new Confusion(), new Hex(), new DazzlingDream()];
    }
}