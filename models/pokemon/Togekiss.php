<?php

namespace models\pokemon;

class Togekiss extends Pokemon
{
    protected array $type = ["fairy", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Charm",
            11 => "Confusion",
            32 => "Airslash",
            45 => "FairyWind",
            60 => "Gust",
            80 => "DazzlingDream",
            90 => "Hurricane"
        ];
    }
}