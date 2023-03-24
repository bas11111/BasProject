<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\Charm;
use models\moves\Confusion;
use models\moves\DazzlingDream;

class Xerneas extends Pokemon
{
    protected int $health = 427;
    protected int $maxHealth = 427;
    protected int $CP = 4020;
    protected array $type = ["fairy"];

    public function getWeakAgainst(): array
    {
        return ["poison", "steel", "legendary"];
    }

    public function getMoves(): array
    {
        return [new Charm(), new Confusion(), new BugBite(), new DazzlingDream()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}