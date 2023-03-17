<?php

namespace models\pokemon;

use models\moves\HydroPump;
use models\moves\IceKick;
use models\moves\Snarl;
use models\moves\WaterGun;

class Suicune extends Pokemon
{

    protected int $health = 381;
    protected int $maxHealth = 381;

    protected array $type = ["water"];

    public function getWeakAgainst(): array
    {
        return ["electric", "grass", "ice", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 3147;
    }

    public function getChargedAttack(): int
    {
        return 114;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new WaterGun(), new IceKick(), new Snarl(), new HydroPump()];
    }
}