<?php

namespace models\pokemon;

class Dragonite extends Pokemon
{
    protected array $type = ["dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "DragonBreath",
            6 => "Counter",
            25 => "AirSlash",
            40 => "DragonTail",
            60 => "Gust",
            80 => "DracoMeteor",
            90 => "Hurricane",
        ];
    }
}