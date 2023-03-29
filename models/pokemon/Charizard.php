<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\DragonBreath;
use models\moves\FireBreath;
use models\moves\FlameBlast;

class Charizard extends Pokemon
{
    protected int $health = 326;
    protected int $maxHealth = 326;
    protected int $CP = 3045;
    protected array $type = ["fire"];
    protected int $shields = 2;

    public function getWeakAgainst(): array
    {
        return ["water", "ground", "rock", "fly", "normal", "legendary", "electric"];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new FireBreath(), new AirSlash(), new DragonBreath(), new FlameBlast()];
    }
}