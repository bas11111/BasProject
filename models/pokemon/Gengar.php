<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Hex;
use models\moves\Poltergeist;
use models\moves\Snarl;

class Gengar extends Pokemon
{
    protected array $type = ["ghost", "poison"];
    protected int $shields = 2;

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