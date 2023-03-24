<?php

namespace models\pokemon;

use models\moves\Confusion;
use models\moves\Counter;
use models\moves\FutureSight;
use models\moves\Hex;

class Alakazam extends Pokemon
{
    protected int $health = 345;
    protected int $maxHealth = 345;
    protected int $CP = 3221;
    protected array $type = ["psychic"];
    public function getWeakAgainst(): array
    {
        return ["bug", "dark", "ghost"];
    }

    public function getMoves(): array
    {
        return [new Confusion(), new Hex(), new Counter(), new FutureSight()];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }
}