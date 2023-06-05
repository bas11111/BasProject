<?php

namespace models\pokemon;

class Rhyperior extends Pokemon
{
    protected array $type = ["rock", "ground"];
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
            9 => "Cut",
            21 => "RockThrow",
            44 => "Rollout",
            61 => "MudShot",
            80 => "StoneEdge",
            90 => "EarthQuake"
        ];
    }
}