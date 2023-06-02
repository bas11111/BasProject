<?php

namespace models\pokemon;

class Gyarados extends Pokemon
{
    protected array $type = ["water", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "WaterGun",
            7 => "DragonBreath",
            15 => "Snarl",
            30 => "DragonTail",
            60 => "Waterfall",
            80 => "HydroPump",
            90 => "DracoMeteor"
        ];
    }
}