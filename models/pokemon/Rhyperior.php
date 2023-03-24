<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\StoneEdge;

class Rhyperior extends Pokemon
{
    protected int $health = 536;
    protected int $maxHealth = 536;
    protected int $CP = 3968;
    protected array $type = ["rock", "ground"];

    public function getWeakAgainst(): array
    {
        return ["water", "dark", "legendary"];
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