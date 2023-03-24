<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Cut;
use models\moves\Hurricane;
use models\moves\Snarl;

class Tornadus extends Pokemon
{
    protected int $health = 378;
    protected int $maxHealth = 378;
    protected int $CP = 3540;
    protected array $type = ["fly"];
    public function getWeakAgainst(): array
    {
        return ["electric", "ice", "rock"];
    }

    public function getMoves(): array
    {
        return [new AirSlash(), new Snarl(), new Cut, new Hurricane()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}