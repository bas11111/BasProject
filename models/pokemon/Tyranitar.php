<?php

namespace models\pokemon;

class Tyranitar extends Pokemon
{
    protected array $type = ["rock", "dark"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "RockThrow",
            12 => "Snarl",
            25 => "Hex",
            34 => "Rollout",
            47 => "FeintAttack",
            61 => "MudSlap",
            80 => "StoneEdge",
            90 => "DarkPulse"
        ];
    }
}