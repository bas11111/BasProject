<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\BulletPunch;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;

class Dragonite extends Pokemon
{
    protected int $health = 386;
    protected int $maxHealth = 386;
    protected array $type = ["dragon"];


    public function getWeakAgainst(): array
    {
        return ["dragon", "fairy", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 4032;
    }

    public function getChargedAttack(): int
    {
        return 106;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new DragonBreath(), new AirSlash(), new BulletPunch(), new DracoMeteor()];
    }
}
