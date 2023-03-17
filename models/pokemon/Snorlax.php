<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Confusion;
use models\moves\Cut;
use models\moves\HornAttack;

class Snorlax extends Pokemon
{
    protected int $health = 775;
    protected int $maxHealth = 775;

    protected array $type = ["normal"];


    public function getWeakAgainst(): array
    {
        return ["ice", "rock", "legendary", "fighting"];
    }

    public function getCombatPower(): int
    {
        return 2190;
    }

    public function getChargedAttack(): int
    {
        return 32;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new Cut(), new Confusion(), new BulletPunch(), new HornAttack()];
    }
}
