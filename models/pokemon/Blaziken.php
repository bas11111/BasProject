<?php

namespace models\pokemon;

class Blaziken extends Pokemon
{
    protected array $type = ["fire", "fighting"];
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
            5 => "RockSmash",
            17 => "FireBreath",
            37 => "Incinerate",
            50 => "BulletPunch",
            80 => "FocusBlast",
            90 => "FlameBlast"
        ];
    }
}