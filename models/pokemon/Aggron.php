<?php

namespace models\pokemon;

class Aggron extends Pokemon
{
    protected array $type = ["rock", "steel"];
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
            6 => "IronTail",
            20 => "Rollout",
            40 => "RockThrow",
            80 => "HeavySlam",
            90 => "StoneEdge",
            ];
    }
}