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
    protected int $CP = 3741;
    protected array $type = ["electric", "fly"];

    public function getWeakAgainst(): array
    {
        return ["electric", "ground", "dragon", "grass", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new AirSlash(), new Spark(), new BulletPunch(), new ThunderBolt()];
    }
}