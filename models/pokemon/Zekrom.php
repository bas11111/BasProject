<?php

namespace models\pokemon;

use models\moves\Spark;
use models\moves\Snarl;
use models\moves\BulletPunch;
use models\moves\ThunderBolt;

class Zekrom extends Pokemon
{
    protected array $type = ["electric", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["Spark", "Snarl", "BulletPunch", "Thunderbolt"];
    }
}