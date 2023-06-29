<?php

namespace models\pokemon;
use models\moves\AirSlash;
use models\moves\FireBreath;
use models\moves\FlameBlast;
use models\moves\Gust;
use models\moves\Hurricane;
use models\moves\Incinerate;

class Moltres extends Pokemon
{
    protected array $type = ["fire", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => FireBreath::class,
            15 => AirSlash::class,
            29 => Incinerate::class,
            45 => Gust::class,
            80 => FlameBlast::class,
            90 => Hurricane::class
        ];
    }
}