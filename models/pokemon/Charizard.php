<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\FireBreath;
use models\moves\FlameBlast;
use models\moves\Gust;
use models\moves\Incinerate;

class Charizard extends Pokemon
{
    protected array $type = ["fire"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => FireBreath::class,
            6 => Incinerate::class,
            20 => AirSlash::class,
            25 => DragonBreath::class,
            40 => DragonTail::class,
            45 => Gust::class,
            80 => DracoMeteor::class,
            90 => FlameBlast::class
        ];
    }
}