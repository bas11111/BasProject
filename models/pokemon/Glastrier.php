<?php

namespace models\pokemon;

use models\moves\Avalanche;
use models\moves\Cut;
use models\moves\IceKick;
use models\moves\MudSlap;

class Glastrier extends Pokemon
{
    protected array $type = ["ice"];
    protected int $shields = 2;


    public function getMoves(): array
    {
        return [new IceKick(), new Cut(), new MudSlap(), new Avalanche()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}