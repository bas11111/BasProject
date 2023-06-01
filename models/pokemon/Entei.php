<?php

namespace models\pokemon;
class Entei extends Pokemon
{
    protected array $type = ["fire"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "FireBreath",
            7 => "BulletPunch",
            22 => "IronTail",
            50 => "Incinerate",
            80 => "FlameBlast"
        ];
    }
}