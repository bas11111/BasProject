<?php

namespace models\pokemon;

class Raikou extends Pokemon
{
    protected array $type = ["electric"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "FeintAttack",
            20 => "Spark",
            40 => "VoltSwitch",
            60 => "Snarl",
            80 => "ThunderBolt"
        ];
    }
}