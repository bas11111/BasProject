<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\Snarl;

class Hydreigon extends Pokemon
{
    protected array $type = ["dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["DragonBreath", "Snarl", "BulletPunch", "DracoMeteor"];
    }
}