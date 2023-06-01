<?php

namespace models\pokemon;

class Arceus extends Pokemon
{
    protected array $type = ["legendary"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "LegendarySmash",
            15 => "Charm",
            40 => "ZenHeadButt",
            66 => "Confusion",
            80 => "DazzlingDream",
            100 => "LegendaryBurst"
        ];
    }
}