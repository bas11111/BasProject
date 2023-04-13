<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Confusion;
use models\moves\HeavySlam;
use models\moves\MudSlap;

class Metagross extends Pokemon
{
    protected array $type = ["steel"];
    protected int $shields = 2;


    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new BulletPunch(), new Confusion(), new MudSlap(), new HeavySlam()];
    }
}