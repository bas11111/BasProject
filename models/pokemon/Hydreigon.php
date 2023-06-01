<?php

namespace models\pokemon;

use models\moves\DragonTail;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\Snarl;

class Hydreigon extends Pokemon
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
        return ["DragonBreath", "Snarl", "DragonTail", "DracoMeteor"];
    }
}