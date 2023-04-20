<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\BulletPunch;
use models\moves\Spark;
use models\moves\ThunderBolt;

class Zapdos extends Pokemon
{
    protected array $type = ["electric", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["AirSlash", "Spark", "BulletPunch", "ThunderBolt"];
    }
}