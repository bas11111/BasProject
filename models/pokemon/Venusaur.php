<?php

namespace models\pokemon;

class Venusaur extends Pokemon
{
    protected array $type = ["grass"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "BulletSeed",
            23 => "Acid",
            40 => "MagicalLeaf",
            61 => "PoisonJab",
            80 => "SolarBeam"
        ];
    }
}