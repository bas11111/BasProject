<?php

namespace models\pokemon;

class Charizard extends Pokemon
{
    protected array $type = ["fire"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "FireBreath",
            6 => "Incinerate",
            20 => "AirSlash",
            25 => "DragonBreath",
            40 => "DragonTail",
            45 => "Gust",
            80 => "DracoMeteor",
            90 => "FlameBlast"
        ];
    }
}