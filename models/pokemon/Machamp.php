<?php

namespace models\pokemon;

class Machamp extends Pokemon
{
    protected array $type = ["fighting"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Counter",
            11 => "Cut",
            35 => "IronTail",
            51 => "RockSmash",
            65 => "BulletPunch",
            80 => "FocusBlast"
        ];
    }
}