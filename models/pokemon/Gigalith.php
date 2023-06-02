<?php

namespace models\pokemon;

class Gigalith extends Pokemon
{
    protected array $type = ["rock"];
    protected int $shields = 2;
    protected int $potions = 2;

    public static function getAvailableMoves(): array
    {
        return [
            1 => "RockThrow",
            9 => "MudSlap",
            20 => "MudShot",
            37 => "Rollout",
            80 => "StoneEdge"
        ];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}