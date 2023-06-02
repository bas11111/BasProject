<?php

namespace models\pokemon;

class Glastrier extends Pokemon
{
    protected array $type = ["ice"];
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
            14 => "Cut",
            32 => "HornAttack",
            45 => "WaterGun",
            60 => "IceFang",
            80 => "Avalanche"
        ];
    }
}