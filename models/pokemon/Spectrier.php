<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Hex;
use models\moves\Poltergeist;
use models\moves\Snarl;

class Spectrier extends Pokemon
{
    protected array $type = ["ghost"];
    protected int $shields = 2;

    public function getWeakAgainst(): array
    {
        return ["dark", "ghost"];
    }

    public function getMoves(): array
    {
        return [new Hex(), new Snarl(), new Acid(), new Poltergeist()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}