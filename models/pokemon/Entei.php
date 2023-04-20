<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\FireBreath;
use models\moves\FlameBlast;
use models\moves\MudSlap;

class Entei extends Pokemon
{
    protected array $type = ["fire"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new FireBreath(), new BulletPunch(), new MudSlap(), new FlameBlast()];
    }
}