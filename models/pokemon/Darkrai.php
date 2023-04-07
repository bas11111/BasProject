<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\DarkPulse;
use models\moves\Hex;
use models\moves\Snarl;

class Darkrai extends Pokemon
{
    protected array $type = ["dark"];
    protected int $shields = 2;

    public function getWeakAgainst(): array
    {
        return ["bug", "fairy", "fighting"];
    }

    public function getMoves(): array
    {
        return [new Snarl(), new Hex(), new Acid(), new DarkPulse()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}