<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\BulletPunch;
use models\moves\BulletSeed;
use models\moves\SolarBeam;

class Venusaur extends Pokemon
{

    protected int $health = 418;
    protected int $maxHealth = 418;
    protected array $type = ["grass"];


    public function getWeakAgainst(): array
    {
        return ["fire", "normal", "legendary", "poison"];
    }

    public function getCombatPower(): int
    {
        return 2862;
    }

    public function getChargedAttack(): int
    {
        return 92;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new BulletSeed(), new Acid(), new BulletPunch(), new SolarBeam()];
    }
}
