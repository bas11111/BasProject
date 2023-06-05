<?php

namespace models\pokemon;

class Nihilego extends Pokemon
{
    protected array $type = ["rock", "poison"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Acid",
            14 => "RockThrow",
            29 => "PoisonJab",
            46 => "Rollout",
            80 => "Sludgewave",
            90 => "StoneEdge",
        ];
    }
}