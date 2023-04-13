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


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new BulletSeed(), new MudSlap(), new RockThrow(), new SolarBeam()];
    }
}