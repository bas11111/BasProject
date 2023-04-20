<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\Charm;
use models\moves\Confusion;
use models\moves\DazzlingDream;

class Xerneas extends Pokemon
{
    protected array $type = ["fairy"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function getAvailableMoves(): array
    {
        return ["Charm", "Confusion", "BugBite", "DazzlingDream"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}