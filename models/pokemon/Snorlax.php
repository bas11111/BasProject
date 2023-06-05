<?php

namespace models\pokemon;

class Snorlax extends Pokemon
{
    protected array $type = ["normal"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "Cut",
            31 => "Snarl",
            50 => "HiddenPower",
            70 => "BulletPunch",
            80 => "HornAttack",
        ];
    }
}