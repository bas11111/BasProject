<?php

namespace models\pokemon;

class Kyogre extends Pokemon
{
    protected array $type = ["water"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Cut",
            4 => "WaterGun",
            21 => "IceKick",
            45 =>"Waterfall",
            80 => "HydroPump"
        ];
    }
}