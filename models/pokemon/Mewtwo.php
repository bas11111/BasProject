<?php

namespace models\pokemon;

use models\moves\Confusion;
use models\moves\FutureSight;
use models\moves\LegendaryBurst;
use models\moves\LegendarySmash;

class Mewtwo extends Pokemon
{
    protected array $type = ["legendary"];
    protected int $shields = 2;


    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new LegendarySmash(), new LegendaryBurst(), new Confusion(), new FutureSight()];
    }
}