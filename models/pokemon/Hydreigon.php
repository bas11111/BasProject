<?php

namespace models\pokemon;

class Hydreigon extends Pokemon
{
    protected array $type = ["dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "DragonBreath",
            15 => "Snarl",
            30 => "Ashtonish",
            45 => "Hex",
            60 => "DragonTail",
            80 => "DracoMeteor"
        ];
    }
}