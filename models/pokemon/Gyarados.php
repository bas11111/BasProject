<?php

namespace models\pokemon;

use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\HydroPump;
use models\moves\Snarl;
use models\moves\Waterfall;
use models\moves\WaterGun;

class Gyarados extends Pokemon
{
    protected array $type = ["water", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => WaterGun::class,
            7 => DragonBreath::class,
            15 => Snarl::class,
            30 => DragonTail::class,
            60 => Waterfall::class,
            80 => HydroPump::class,
            90 => DracoMeteor::class
        ];
    }
}