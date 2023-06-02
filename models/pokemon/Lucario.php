<?php

namespace models\pokemon;

class Lucario extends Pokemon
{
    protected array $type = ["fighting"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            "Counter",
            "Cut",
            "BulletPunch",
            "IronTail",
            "RockSmash",
            "FocusBlast",
            "HeavySlam"
        ];
    }
}