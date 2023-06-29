<?php

namespace models\pokemon;

use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\Snarl;
use models\moves\Spark;
use models\moves\ThunderBolt;
use models\moves\VoltSwitch;

class Zekrom extends Pokemon
{
    protected array $type = ["electric", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Spark::class,
            8 => Snarl::class,
            24 => DragonTail::class,
            40 => DragonBreath::class,
            61 => VoltSwitch::class,
            80 => ThunderBolt::class,
            90 => DracoMeteor::class
        ];
    }
}