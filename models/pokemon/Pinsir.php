<?php

namespace models\pokemon;

class Pinsir extends Pokemon
{
    protected array $type = ["bug"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "BugBite",
            20 => "RockThrow",
            34 => "BulletSeed",
            50 => "Rollout",
            61 => "StruggleBug",
            80 => "BugBuzz"
        ];
    }
}