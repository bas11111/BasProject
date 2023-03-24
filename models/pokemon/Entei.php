<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\FireBreath;
use models\moves\FlameBlast;
use models\moves\MudSlap;

class Entei extends Pokemon
{
    protected int $health = 411;
    protected int $maxHealth = 411;
    protected int $CP = 3681;
    protected array $type = ["fire"];

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