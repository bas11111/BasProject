<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Counter;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\Gust;
use models\moves\Hurricane;

class Dragonite extends Pokemon
{
    protected array $type = ["dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => DragonBreath::class,
            6 => Counter::class,
            25 => AirSlash::class,
            40 => DragonTail::class,
            60 => Gust::class,
            80 => DracoMeteor::class,
            90 => Hurricane::class,
        ];
    }
}