<?php

namespace models\pokemon;

class Tornadus extends Pokemon
{
    protected array $type = ["fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "AirSlash",
            12 => "Gust",
            28 => "Cut",
            80 => "Hurricane"
        ];
    }
}