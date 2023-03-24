<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Hex;
use models\moves\Poltergeist;
use models\moves\Snarl;

class Gengar extends Pokemon
{
    protected int $health = 325;
    protected int $maxHealth = 325;
    protected int $CP = 3027;
    protected array $type = ["ghost", "poison"];

    public function getWeakAgainst(): array
    {
        return ["ghost", "ground", "dark", "psychic", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new Acid(), new Hex, new Snarl(), new Poltergeist()];
    }
}