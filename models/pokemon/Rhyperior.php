<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\StoneEdge;

class Rhyperior extends Pokemon
{
    protected array $type = ["rock", "ground"];
    protected int $shields = 2;

    public function getWeakAgainst(): array
    {
        return ["grass", "ice", "water", "dark", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new RockThrow(), new MudSlap(), new BulletPunch(), new StoneEdge()];
    }
}