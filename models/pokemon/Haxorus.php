<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\Gust;
use models\moves\Snarl;

class Haxorus extends Pokemon
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
            14 => DragonTail::class,
            32 => Snarl::class,
            45 => AirSlash::class,
            60 => Gust::class,
            80 => DracoMeteor::class
        ];
    }
}