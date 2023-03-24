<?php

namespace models\pokemon;

use models\moves\DragonBreath;
use models\moves\HydroPump;
use models\moves\Snarl;
use models\moves\WaterGun;

class Gyarados extends Pokemon
{
    protected int $health = 330;
    protected int $maxHealth = 330;
    protected int $CP = 3594;
    protected array $type = ["water", "dragon"];

    public function getWeakAgainst(): array
    {
        return ["grass", "ice", "dragon", "legendary", "electric"];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new DragonBreath(), new WaterGun(), new Snarl(), new HydroPump()];
    }
}