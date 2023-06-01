<?php

namespace models\pokemon;

class Abomasnow extends Pokemon
{
    protected array $type = ["ice", "grass"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "IceKick",
            6 => "IceFang",
            20 => "BulletSeed",
            40 => "MudShot",
            55 => "MagicalLeaf",
            70 => "MudSlap",
            80 => "Avalance",
            90 => "SolarBeam"
        ];
    }
}