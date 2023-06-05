<?php

namespace models\pokemon;

class Meganium extends Pokemon
{
    protected array $type = ["grass"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "BulletSeed",
            15 => "MudSlap",
            35 => "Cut",
            55 => "Mudshot",
            70 => "MagicalLeaf",
            80 => "SolarBeam"
        ];
    }
}