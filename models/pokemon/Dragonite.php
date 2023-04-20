<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\BulletPunch;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;

class Dragonite extends Pokemon
{
    protected array $type = ["dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new DragonBreath(), new AirSlash(), new BulletPunch(), new DracoMeteor()];
    }
}