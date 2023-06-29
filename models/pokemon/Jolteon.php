<?php

namespace models\pokemon;

use models\moves\FeintAttack;
use models\moves\Snarl;
use models\moves\Spark;
use models\moves\ThunderBolt;
use models\moves\VoltSwitch;

class Jolteon extends Pokemon
{
    protected array $type = ["electric"];
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
            21 => Snarl::class,
            36 => VoltSwitch::class,
            55 => FeintAttack::class,
            80 => ThunderBolt::class,
        ];
    }
}