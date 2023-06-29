<?php

namespace models\pokemon;

use models\moves\BulletSeed;
use models\moves\Cut;
use models\moves\MagicalLeaf;
use models\moves\MudShot;
use models\moves\MudSlap;
use models\moves\SolarBeam;

class Meganium extends Pokemon
{
    protected array $type = ["grass"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => BulletSeed::class,
            15 => MudSlap::class,
            35 => Cut::class,
            55 => MudShot::class,
            70 => MagicalLeaf::class,
            80 => SolarBeam::class
        ];
    }
}