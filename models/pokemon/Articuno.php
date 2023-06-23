<?php

namespace models\pokemon;

class Articuno extends Pokemon
{
    protected array $type = ["ice", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "IceFang",
            8 => "IceKick",
            24 => "AirSlash",
            41 => "Gust",
            66 => "WaterGun",
            80 => "Avalanche",
            90 => "Hurricane"
        ];
    }
}