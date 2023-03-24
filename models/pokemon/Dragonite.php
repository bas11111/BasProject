<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\BulletPunch;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;

class Dragonite extends Pokemon
{
    protected int $health = 428;
    protected int $maxHealth = 428;
    protected int $CP = 4032;
    protected array $type = ["dragon"];

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
        return [new DragonBreath(), new AirSlash(), new BulletPunch(), new DracoMeteor()];
    }
}