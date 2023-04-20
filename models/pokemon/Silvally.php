<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Hex;
use models\moves\SludgeWave;
use models\moves\Snarl;

class Silvally extends Pokemon
{
    protected array $type = ["poison"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function getAvailableMoves(): array
    {
        return ["Acid", "Snarl", "Hex", "SludgeWave"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}