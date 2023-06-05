<?php

namespace models\pokemon;

class Zarude extends Pokemon
{
    protected array $type = ["grass", "dark"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Bulletseed",
            18 => "Snarl",
            41 => "FeintAttack",
            56 => "MagicalLeaf",
            80 => "SolarBeam",
            90 => "DarkPulse"
        ];
    }
}