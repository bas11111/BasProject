<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\Confusion;
use models\moves\DazzlingDream;
use models\moves\Hex;

class Gardevoir extends Pokemon
{
    protected int $health = 381;
    protected int $maxHealth = 381;
    protected int $CP = 3267;
    protected array $type = ["fairy", "psychic"];

    public function getWeakAgainst(): array
    {
        return ["poison", "steel", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new Charm(), new Confusion(), new Hex(), new DazzlingDream()];
    }
}