<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\BulletPunch;
use models\moves\BulletSeed;
use models\moves\SolarBeam;

class Venusaur extends Pokemon
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
        return ["BulletSeed", "Acid", "BulletPunch", "SolarBeam"];
    }
}