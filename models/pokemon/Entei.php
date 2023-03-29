<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\FireBreath;
use models\moves\FlameBlast;
use models\moves\MudSlap;

class Entei extends Pokemon
{
    protected int $health = 392;
    protected int $maxHealth = 392;
    protected int $CP = 3681;
    protected array $type = ["fire"];
    protected int $shields = 2;

    public function getWeakAgainst(): array
    {
        return ["fly", "water", "ground", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new FireBreath(), new BulletPunch(), new MudSlap(), new FlameBlast()];
    }
}