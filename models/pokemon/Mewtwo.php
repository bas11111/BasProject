<?php

namespace models\pokemon;

use models\moves\Confusion;
use models\moves\FutureSight;
use models\moves\LegendaryBurst;
use models\moves\LegendarySmash;

class Mewtwo extends Pokemon
{
    protected int $health = 550;
    protected int $maxHealth = 550;
    protected int $CP = 4452;
    protected array $type = ["legendary"];

    public function getWeakAgainst(): array
    {
        return ["fighting"];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new LegendarySmash(), new LegendaryBurst(), new Confusion(), new FutureSight()];
    }
}