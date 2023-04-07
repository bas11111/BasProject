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

    public function getWeakAgainst(): array
    {
        return ["dragon", "fairy", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new DragonBreath(), new Snarl(), new BulletPunch(), new DracoMeteor()];
    }
}