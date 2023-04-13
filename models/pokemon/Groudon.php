<?php

namespace models\pokemon;

use models\moves\DragonBreath;
use models\moves\Earthquake;
use models\moves\FireBreath;
use models\moves\MudSlap;

class Groudon extends Pokemon
{
    protected array $type = ["ground"];
    protected int $shields = 2;


    public function getMoves(): array
    {
        return [new MudSlap(), new DragonBreath(), new FireBreath(), new Earthquake()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}