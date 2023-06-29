<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\BulletPunch;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\Gust;
use models\moves\Hurricane;

class Salamence extends Pokemon
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
            1 => DragonBreath::class,
            14 => BulletPunch::class,
            27 => AirSlash::class,
            35 => Gust::class,
            51 => DragonTail::class,
            80 => DracoMeteor::class,
            90 => Hurricane::class
        ];
    }
}