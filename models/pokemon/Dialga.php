<?php

namespace models\pokemon;

class Dialga extends Pokemon
{
    protected array $type = ["steel", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "BulletPunch",
            11 => "IronTail",
            30 => "DragonBreath",
            41 => "DragonTail",
            65 => "RockSmash",
            80 => "HeavySlam",
            90 => "DracoMeteor"
        ];
    }
}