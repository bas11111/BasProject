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

    public function getWeakAgainst(): array
    {
        return ["fire", "normal", "legendary", "poison"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new BulletSeed(), new Acid(), new BulletPunch(), new SolarBeam()];
    }
}