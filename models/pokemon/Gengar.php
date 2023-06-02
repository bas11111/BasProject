<?php

namespace models\pokemon;

class Gengar extends Pokemon
{
    protected array $type = ["ghost", "poison"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Acid",
            6 => "Snarl",
            19 => "PoisonJab",
            36 => "Hex",
            50 => "Astonish",
            80 => "SludgeBomb",
            90 => "Poltergeist"
        ];
    }
}