<?php

namespace models\pokemon;

use models\moves\Avalanche;
use models\moves\BulletPunch;
use models\moves\BulletSeed;
use models\moves\IceFang;
use models\moves\IceKick;
use models\moves\MagicalLeaf;
use models\moves\MudShot;
use models\moves\MudSlap;
use models\moves\SolarBeam;

class Abomasnow extends Pokemon
{
    protected array $type = ["ice", "grass"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => IceKick::class,
            6 => IceFang::class,
            20 => BulletSeed::class,
            40 => MudShot::class,
            55 => MagicalLeaf::class,
            70 => MudSlap::class,
            80 => Avalanche::class,
            90 => SolarBeam::class
        ];
    }
}