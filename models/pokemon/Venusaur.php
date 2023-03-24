<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\BulletPunch;
use models\moves\BulletSeed;
use models\moves\SolarBeam;

class Venusaur extends Pokemon
{
    protected int $health = 418;
    protected int $maxHealth = 418;
    protected int $CP = 2862;
    protected array $type = ["grass"];

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