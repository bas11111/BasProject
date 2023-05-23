<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Confusion;
use models\moves\HeavySlam;
use models\moves\IronTail;

class Metagross extends Pokemon
{
    protected array $type = ["steel"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["BulletPunch", "Confusion", "IronTail", "HeavySlam"];
    }
}