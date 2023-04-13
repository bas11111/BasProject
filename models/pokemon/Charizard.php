<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\DragonBreath;
use models\moves\FireBreath;
use models\moves\FlameBlast;

class Charizard extends Pokemon
{
    protected array $type = ["fire"];
    protected int $shields = 2;


    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new FireBreath(), new AirSlash(), new DragonBreath(), new FlameBlast()];
    }
}