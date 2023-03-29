<?php

namespace models\pokemon;

use models\moves\DragonBreath;
use models\moves\Earthquake;
use models\moves\FireBreath;
use models\moves\MudSlap;

class Garchomp extends Pokemon
{
    protected int $health = 471;
    protected int $maxHealth = 471;
    protected int $CP = 4218;
    protected array $type = ["dragon", "ground"];
    protected int $shields = 2;

    public function getWeakAgainst(): array
    {
        return ["dragon", "fairy", "grass", "ice", "water", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new DragonBreath(), new MudSlap(), new FireBreath(), new Earthquake()];
    }
}