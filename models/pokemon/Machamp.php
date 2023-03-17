<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Counter;
use models\moves\FocusBlast;
use models\moves\Snarl;

class Machamp extends Pokemon
{

    protected int $health = 401;
    protected int $maxHealth = 401;

    protected array $type = ["fighting"];


    public function getWeakAgainst(): array
    {
        return ["fly"];
    }

    public function getCombatPower(): int
    {
        return 3226;
    }

    public function getChargedAttack(): int
    {
        return 90;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new Counter(), new Snarl(), new BulletPunch(), new FocusBlast()];
    }
}