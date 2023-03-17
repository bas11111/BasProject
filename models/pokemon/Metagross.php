<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Confusion;
use models\moves\HeavySlam;
use models\moves\MudSlap;

class Metagross extends Pokemon
{
    protected int $health = 513;
    protected int $maxHealth = 513;

    protected array $type = ["steel"];

    public function getWeakAgainst(): array
    {
        return ["fighting", "fire", "ground", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 4031;
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
        return [new BulletPunch(), new Confusion(), new MudSlap(), new HeavySlam()];
    }
}