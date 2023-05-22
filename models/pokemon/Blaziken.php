<?php

namespace models\pokemon;

use models\moves\Counter;
use models\moves\FireBreath;
use models\moves\Cut;
use models\moves\FocusBlast;

class Blaziken extends Pokemon
{
    protected array $type = ["fire", "fighting"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["Counter", "FireBreath", "Cut", "FocusBlast"];
    }
}