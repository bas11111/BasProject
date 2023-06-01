<?php

namespace models\pokemon;

class Gallade extends Pokemon
{
    protected array $type = ["fighting", "psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Counter",
            11 => "ZenHeadButt",
            25 => "Confusion",
            40 => "RockSmash",
            60 => "Charm",
            80 => "FutureSight",
            90 => "FocusBlast"
        ];
    }
}