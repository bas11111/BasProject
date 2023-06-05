<?php

namespace models\pokemon;

class Zekrom extends Pokemon
{
    protected array $type = ["electric", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Spark",
            8 => "Snarl",
            24 => "DragonTail",
            40 => "DragonBreath",
            61 => "VoltSwitch",
            80 => "Thunderbolt",
            90 => "DracoMeteor"
        ];
    }
}