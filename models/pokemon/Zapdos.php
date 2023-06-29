<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Gust;
use models\moves\Hurricane;
use models\moves\Spark;
use models\moves\ThunderBolt;
use models\moves\VoltSwitch;

class Zapdos extends Pokemon
{
    protected array $type = ["electric", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => AirSlash::class,
            8 => Spark::class,
            22 => VoltSwitch::class,
            43 => Gust::class,
            80 => ThunderBolt::class,
            90 => Hurricane::class
        ];
    }
}