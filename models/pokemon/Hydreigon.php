<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\Snarl;

class Hydreigon extends Pokemon
{
    protected int $health = 294;
    protected int $maxHealth = 294;

    protected array $type = ["dragon"];

    public function getWeakAgainst(): array
    {
        return ["dragon", "fairy", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 3849;
    }

    public function getChargedAttack(): int
    {
        return 130;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new DragonBreath(), new Snarl(), new BulletPunch(), new DracoMeteor()];
    }
}
