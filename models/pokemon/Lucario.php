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
            1 => "Counter",
            6 => "Cut",
            16 => "BulletPunch",
            30 => "IronTail",
            55 => "RockSmash",
            80 => "FocusBlast",
            90 => "HeavySlam"
        ];
    }
}