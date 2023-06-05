<?php

namespace models\pokemon;

class Xerneas extends Pokemon
{
    protected array $type = ["fairy"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Charm",
            20 => "ZenHeadbutt",
            47 => "Confusion",
            62 => "FairyWind",
            80 => "DazzlingDream"
        ];
    }
}