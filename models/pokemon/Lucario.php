<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Counter;
use models\moves\Cut;
use models\moves\FocusBlast;

class Lucario extends Pokemon
{

    protected int $health = 418;
    protected int $maxHealth = 418;

    protected array $type = ["fighting"];

    public function getWeakAgainst(): array
    {
        return ["fly", "fairy"];
    }

    public function getCombatPower(): int
    {
        return 4061;
    }

    public function getChargedAttack(): int
    {
        return 120;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new Counter(), new BulletPunch(), new Cut(), new FocusBlast()];
    }
}
