<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\DazzlingDream;
use models\moves\LegendaryBurst;
use models\moves\LegendarySmash;

class Arceus extends Pokemon
{
    protected array $type = ["legendary"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function getAvailableMoves(): array
    {
        return ["LegendarySmash", "Charm", "DazzlingDream", "LegendaryBurst"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}