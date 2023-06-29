<?php

namespace models\pokemon;

use models\moves\FeintAttack;
use models\moves\Snarl;
use models\moves\Spark;
use models\moves\ThunderBolt;
use models\moves\VoltSwitch;

class Raikou extends Pokemon
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
            1 => FeintAttack::class,
            20 => Spark::class,
            40 => VoltSwitch::class,
            60 => Snarl::class,
            80 => ThunderBolt::class
        ];
    }
}