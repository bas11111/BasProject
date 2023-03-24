<?php

namespace models\pokemon;

use models\moves\Avalanche;
use models\moves\Cut;
use models\moves\IceKick;
use models\moves\MudSlap;

class Glastrier extends Pokemon
{
    protected int $health = 440;
    protected int $maxHealth = 440;
    protected int $CP = 4147;
    protected array $type = ["ice"];

    public function getWeakAgainst(): array
    {
        return ["fighting", "fire", "rock", "steel"];
    }

    public function getMoves(): array
    {
        return [new IceKick(), new Cut(), new MudSlap(), new Avalanche()];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}