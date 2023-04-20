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
    protected int $potions = 2;

    public function getMoves(): array
    {
        return [new Snarl(), new Hex(), new Acid(), new DarkPulse()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}