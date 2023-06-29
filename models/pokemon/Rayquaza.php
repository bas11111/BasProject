<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\Gust;
use models\moves\Hurricane;

class Rayquaza extends Pokemon
{
    protected array $type = ["dragon", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => AirSlash::class,
            12 => DragonBreath::class,
            31 => Gust::class,
            52 => DragonTail::class,
            80 => Hurricane::class,
            90 => DracoMeteor::class
        ];
    }
}