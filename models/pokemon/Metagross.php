<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Confusion;
use models\moves\HeavySlam;
use models\moves\MudSlap;

class Metagross extends Pokemon
{
    protected int $health = 513;
    protected int $maxHealth = 513;
    protected int $CP = 4031;
    protected array $type = ["steel"];

    public function getWeakAgainst(): array
    {
        return ["fighting", "fire", "ground", "legendary"];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new BulletPunch(), new Confusion(), new MudSlap(), new HeavySlam()];
    }
}