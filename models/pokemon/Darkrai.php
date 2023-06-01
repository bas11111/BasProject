<?php

namespace models\pokemon;

class Darkrai extends Pokemon
{
    protected array $type = ["dark"];
    protected int $shields = 2;
    protected int $potions = 2;

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Snarl",
            4 => "FeintAttack",
            25 => "Hex",
            65 => "Astonish",
            70 => "DarkPulse"
        ];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}