<?php

namespace models\pokemon;

use models\moves\BulletSeed;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\SolarBeam;

class Meganium extends Pokemon
{
    protected int $health = 272;
    protected int $maxHealth = 272;
    protected int $CP = 2524;
    protected array $type = ["grass"];
    protected int $shields = 2;

    public function getWeakAgainst(): array
    {
        return ["fire", "normal", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new BulletSeed(), new MudSlap(), new RockThrow(), new SolarBeam()];
    }
}