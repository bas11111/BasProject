<?php

namespace models\pokemon;

use models\moves\Hex;
use models\moves\Snarl;
use models\moves\Spark;
use models\moves\ThunderBolt;

class Raikou extends Pokemon
{
    protected int $health = 396;
    protected int $maxHealth = 496;
    protected array $type = ["electric"];


    public function getWeakAgainst(): array
    {
        return ["ground", "dragon", "grass", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 3660;
    }

    public function getChargedAttack(): int
    {
        return 118;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new Spark(), new Hex, new Snarl(), new ThunderBolt()];
    }
}