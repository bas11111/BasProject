<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Avalanche;
use models\moves\Gust;
use models\moves\Hurricane;
use models\moves\IceFang;
use models\moves\IceKick;
use models\moves\WaterGun;

class Articuno extends Pokemon
{
    protected array $type = ["ice", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => IceFang::class,
            8 => IceKick::class,
            24 => AirSlash::class,
            41 => Gust::class,
            66 => WaterGun::class,
            80 => Avalanche::class,
            90 => Hurricane::class
        ];
    }
}