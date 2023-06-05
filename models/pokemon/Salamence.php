<?php

namespace models\pokemon;

class Salamence extends Pokemon
{
    protected array $type = ["dragon", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            "DragonBreath",
            "BulletPunch",
            "AirSlash",
            "Gust",
            "DragonTail",
            "DracoMeteor",
            "Hurricane"
        ];
    }
}