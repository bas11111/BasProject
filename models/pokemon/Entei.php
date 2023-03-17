<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\FireBreath;
use models\moves\FlameBlast;
use models\moves\MudSlap;

class Entei extends Pokemon
{

    protected int $health = 411;
    protected int $maxHealth = 411;

    protected array $type = ["fire"];

    public function getWeakAgainst(): array
    {
        return ["fly", "water", "ground", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 3681;
    }

    public function getChargedAttack(): int
    {
        return 122;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new FireBreath(), new BulletPunch(), new MudSlap(), new FlameBlast()];
    }
}