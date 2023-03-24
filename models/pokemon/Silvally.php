<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Hex;
use models\moves\SludgeWave;
use models\moves\Snarl;

class Silvally extends Pokemon
{
    protected int $health = 333;
    protected int $maxHealth = 333;
    protected int $CP = 3113;
    protected array $type = ["poison"];
    public function getWeakAgainst(): array
    {
        return ["ground", "psychic", "legendary"];
    }

    public function getMoves(): array
    {
        return [new Acid(), new Snarl(), new Hex(), new SludgeWave()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}