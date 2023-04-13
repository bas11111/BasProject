<?php

namespace models\pokemon;

use models\moves\Confusion;
use models\moves\Counter;
use models\moves\FutureSight;
use models\moves\Hex;

class Alakazam extends Pokemon
{
    protected array $type = ["psychic"];
    protected int $shields = 2;


    public function getMoves(): array
    {
        return [new Confusion(), new Hex(), new Counter(), new FutureSight()];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }
}