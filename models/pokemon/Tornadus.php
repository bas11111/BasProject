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