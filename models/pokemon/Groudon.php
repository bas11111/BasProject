<?php

namespace models\pokemon;

class Groudon extends Pokemon
{
    protected array $type = ["ground"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "MudSlap",
            6 => "Rollout",
            11 => "DragonBreath",
            34 => "RockThrow",
            50 => "MudShot",
            80 => "StoneEdge",
            90 => "Earthquake"
        ];
    }
}