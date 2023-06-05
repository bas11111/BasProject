<?php

namespace models\pokemon;

class Silvally extends Pokemon
{
    protected array $type = ["poison"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Acid",
            21 => "Snarl",
            34 => "Astonish",
            49 => "PoisonJab",
            61 => "Hex",
            80 => "SludgeWave"
        ];
    }
}