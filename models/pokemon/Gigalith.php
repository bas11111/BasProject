<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\BulletSeed;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\StoneEdge;

class Gigalith extends Pokemon
{
    protected array $type = ["rock"];
    protected int $shields = 2;


    public function getMoves(): array
    {
        return [new RockThrow(), new MudSlap(), new BulletSeed(), new StoneEdge()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}