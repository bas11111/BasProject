<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\IronTail;
use models\moves\DragonBreath;
use models\moves\HeavySlam;

class Dialga extends Pokemon
{
    protected array $type = ["steel", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["BulletPunch", "IronTail", "DragonBreath", "HeavySlam"];
    }
}