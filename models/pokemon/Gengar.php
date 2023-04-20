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
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["Acid", "Hex", "Snarl", "Poltergeist"];
    }
}