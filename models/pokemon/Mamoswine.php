<?php

namespace models\pokemon;

class Mamoswine extends Pokemon
{
    protected array $type = ["ice", "ground"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Icekick",
            11 => "MudSlap",
            27 => "MudShot",
            45 => "Cut",
            60 => "IceFang",
            80 => "Avalanche",
            90 => "EarthQuake"
        ];
    }
}