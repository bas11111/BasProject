<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\RockThrow;
use models\moves\Snarl;
use models\moves\StoneEdge;

class Tyranitar extends Pokemon
{

    protected int $health = 531;
    protected int $maxHealth = 531;

    protected array $type = ["rock", "dark"];


    public function getWeakAgainst(): array
    {
        return ["grass", "fly", "fairy", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 4079;
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
        return [new RockThrow(), new Snarl(), new BulletPunch(), new StoneEdge()];
    }
}