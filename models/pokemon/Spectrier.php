<?php

namespace models\pokemon;

use models\moves\Astonish;
use models\moves\Hex;
use models\moves\Poltergeist;
use models\moves\Snarl;

class Spectrier extends Pokemon
{
    protected array $type = ["ghost"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function getAvailableMoves(): array
    {
        return ["Hex", "Snarl", "Astonish", "Poltergeist"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}