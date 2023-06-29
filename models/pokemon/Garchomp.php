<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\Earthquake;
use models\moves\MudShot;
use models\moves\MudSlap;

class Garchomp extends Pokemon
{
    protected array $type = ["dragon", "ground"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => DragonBreath::class,
            6 => BulletPunch::class,
            21 => MudSlap::class,
            34 => DragonTail::class,
            57 => MudShot::class,
            80 => DracoMeteor::class,
            90 => Earthquake::class
        ];
    }
}