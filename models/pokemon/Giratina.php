<?php

namespace models\pokemon;

class Giratina extends Pokemon
{
    protected array $type = ["ghost", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Hex",
            8 => "Snarl",
            24 => "Astonish",
            42 => "DragonTail",
            65 => "DragonBreath",
            80 => "Poltergeist",
            90 => "DracoMeteor"
        ];
    }
}