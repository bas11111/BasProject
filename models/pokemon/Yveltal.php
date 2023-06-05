<?php

namespace models\pokemon;

class Yveltal extends Pokemon
{
    protected array $type = ["dark", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Snarl",
            22 => "AirSlash",
            38 => "FeintAttack",
            59 => "Gust",
            80 => "Hurricane",
            90 => "DarkPulse"
        ];
    }
}