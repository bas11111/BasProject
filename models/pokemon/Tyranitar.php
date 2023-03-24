<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\RockThrow;
use models\moves\Snarl;
use models\moves\StoneEdge;

class Tyranitar extends Pokemon
{
    protected int $health = 531;
    protected int $maxHealth = 531;
    protected int $CP = 4079;
    protected array $type = ["rock", "dark"];

    public function getWeakAgainst(): array
    {
        return ["grass", "fly", "fairy", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new RockThrow(), new Snarl(), new BulletPunch(), new StoneEdge()];
    }
}