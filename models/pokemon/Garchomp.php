<?php

namespace models\pokemon;

use models\moves\DragonBreath;
use models\moves\Earthquake;
use models\moves\DragonTail;
use models\moves\MudSlap;

class Garchomp extends Pokemon
{
    protected array $type = ["dragon", "ground"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "DragonBreath",
            6 => "BulletPunch",
            21 => "MudSlap",
            34 => "DragonTail",
            57 => "MudShot",
            80 => "DracoMeteor",
            90 => "Earthquake"
        ];
    }
}