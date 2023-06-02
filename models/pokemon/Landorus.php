<?php

namespace models\pokemon;

class Landorus extends Pokemon
{
    protected array $type = ["ground", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "MudSlap",
            6 => "Cut",
            21 => "AirSlash",
            35 => "MudShot",
            46 => "Gust",
            80 => "Earthquake",
            90 => "Hurricane"
        ];
    }
}