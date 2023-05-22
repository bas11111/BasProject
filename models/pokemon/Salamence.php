<?php

namespace models\pokemon;

use models\moves\DragonBreath;
use models\moves\AirSlash;
use models\moves\BulletPunch;
use models\moves\DracoMeteor;

class Salamence extends Pokemon
{
    protected array $type = ["dragon", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return ["DragonBreath", "AirSlash", "BulletPunch", "DracoMeteor"];
    }
}