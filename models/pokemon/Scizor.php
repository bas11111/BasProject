<?php

namespace models\pokemon;

class Scizor extends Pokemon
{
    protected array $type = ["bug", "steel"];
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
            9 => "Bulletpunch",
            21 => "StruggleBug",
            35 => "IronTail",
            55 => "PoisonJab",
            80 => "HeavySlam",
            90 => "BugBuzz",
        ];
    }
}