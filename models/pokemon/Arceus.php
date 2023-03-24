<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\DazzlingDream;
use models\moves\LegendaryBurst;
use models\moves\LegendarySmash;

class Arceus extends Pokemon
{
    protected int $health = 451;
    protected int $maxHealth = 451;
    protected int $CP = 4512;
    protected array $type = ["legendary"];

    public function getWeakAgainst(): array
    {
        return ["fighting"];
    }

    public function getMoves(): array
    {
        return [new LegendarySmash(), new Charm(), new DazzlingDream(), new LegendaryBurst()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}