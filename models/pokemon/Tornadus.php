<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Cut;
use models\moves\Hurricane;
use models\moves\Snarl;

class Tornadus extends Pokemon
{
    protected array $type = ["fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function getAvailableMoves(): array
    {
        return ["AirSlash", "Snarl", "Cut", "Hurricane"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}