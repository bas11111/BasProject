<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\BulletPunch;
use models\moves\Spark;
use models\moves\ThunderBolt;

class Zapdos extends Pokemon
{
    protected int $health = 389;
    protected int $maxHealth = 389;

    protected array $type = ["electric", "fly"];

    public function getWeakAgainst(): array
    {
        return ["electric", "ground", "dragon", "grass", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 3741;
    }

    public function getChargedAttack(): int
    {
        return 122;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new AirSlash(), new Spark(), new BulletPunch(), new ThunderBolt()];
    }
}
