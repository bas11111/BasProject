<?php

namespace models\pokemon;

class Mewtwo extends Pokemon
{
    protected array $type = ["legendary"];
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
            22 => "ZenHeadbutt",
            40 => "LegendarySmash",
            61 => "Cut",
            80 => "FutureSight",
            100 =>"LegendaryBurst",
        ];
    }
}