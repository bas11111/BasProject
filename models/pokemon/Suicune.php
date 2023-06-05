<?php

namespace models\pokemon;

class Suicune extends Pokemon
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
            1 => "IceKick",
            19 => "Snarl",
            31 => "WaterGun",
            50 => "IceFang",
            61 => "Waterfall",
            80 => "HydroPump"
        ];
    }
}