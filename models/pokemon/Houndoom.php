<?php

namespace models\pokemon;

class Houndoom extends Pokemon
{
    protected array $type = ["dark", "fire"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Snarl",
            8 => "Firebreath",
            21 => "Incinerate",
            37 => "FeintAttack",
            80 => "DarkPulse",
            90 => "FlameBlast",
        ];
    }
}