<?php

namespace models\pokemon;

class Alakazam extends Pokemon
{
    protected array $type = ["psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Confusion",
            8 => "ZenHeadbutt",
            25 => "Hex",
            40 => "Charm",
            80 => "FutureSight"
        ];
    }
}