<?php

namespace models\pokemon;

class Zapdos extends Pokemon
{
    protected array $type = ["electric", "fly"];
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
            8 => "Spark",
            22 => "VoltSwitch",
            43 => "Gust",
            80 => "ThunderBolt",
            90 => "Hurricane"
        ];
    }
}