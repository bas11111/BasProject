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

    protected array $type = ["water", "dragon"];


    public function getWeakAgainst(): array
    {
        return ["grass", "ice", "dragon", "legendary", "electric"];
    }

    public function getCombatPower(): int
    {
        return 3594;
    }

    public function getChargedAttack(): int
    {
        return 110;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new DragonBreath(), new WaterGun(), new Snarl(), new HydroPump()];
    }
}
