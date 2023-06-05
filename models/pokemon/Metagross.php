<?php

namespace models\pokemon;

class Metagross extends Pokemon
{
    protected array $type = ["steel", "psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "BulletPunch",
            15 => "ZenHeadbutt",
            21 => "Cut",
            45 => "Confusion",
            60 => "IronTail",
            80 => "FutureSight",
            90 => "HeavySlam"
        ];
    }
}