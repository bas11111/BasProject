<?php

namespace models\pokemon;

class Meloetta extends Pokemon
{
    protected array $type = ["normal", "psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Cut",
            12 => "Confusion",
            30 => "HiddenPower",
            45 => "ZenHeadbutt",
            60 => "HornAttack",
            80 => "FutureSight"
        ];
    }
}