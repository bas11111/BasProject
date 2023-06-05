<?php

namespace models\pokemon;
class Moltres extends Pokemon
{
    protected array $type = ["fire", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "FireBreath",
            15 => "AirSlash",
            29 => "Incinerate",
            45 => "Gust",
            80 => "FlameBlast",
            90 => "Hurricane",
        ];
    }
}