<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Confusion;
use models\moves\Hurricane;
use models\moves\Snarl;

class Yveltal extends Pokemon
{

    protected int $health = 401;
    protected int $maxHealth = 401;

    protected array $type = ["dark", "fly"];


    public function getWeakAgainst(): array
    {
        return ["rock", "normal", "grass", "fly", "electric", "fairy", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 4020;
    }

    public function getChargedAttack(): int
    {
        return 142;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new Snarl(), new AirSlash(), new Confusion(), new Hurricane()];
    }
}
