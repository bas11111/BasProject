<?php

namespace models\pokemon;

use models\moves\Astonish;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\Hex;
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

    public function getAvailableMoves(): array
    {
        return [
            1 => DragonBreath::class,
            15 => Snarl::class,
            30 => Astonish::class,
            45 => Hex::class,
            60 => DragonTail::class,
            80 => DracoMeteor::class
        ];
    }
}