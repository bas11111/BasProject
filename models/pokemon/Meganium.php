<?php

namespace models\pokemon;

use models\moves\BulletSeed;
use models\moves\MudSlap;
use models\moves\RockThrow;
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
        return ["BulletSeed", "MudSlap", "RockThrow", "SolarBeam"];
    }
}