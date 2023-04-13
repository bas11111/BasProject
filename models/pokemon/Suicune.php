<?php

namespace models\pokemon;

use models\moves\HydroPump;
use models\moves\IceKick;
use models\moves\Snarl;
use models\moves\WaterGun;

class Suicune extends Pokemon
{
    protected array $type = ["water"];
    protected int $shields = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new WaterGun(), new IceKick(), new Snarl(), new HydroPump()];
    }
}