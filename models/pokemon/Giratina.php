<?php

namespace models\pokemon;

use models\moves\Astonish;
use models\moves\DracoMeteor;
use models\moves\DragonBreath;
use models\moves\DragonTail;
use models\moves\Hex;
use models\moves\Poltergeist;
use models\moves\Snarl;

class Giratina extends Pokemon
{
    protected array $type = ["ghost", "dragon"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Hex::class,
            8 => Snarl::class,
            24 => Astonish::class,
            42 => DragonTail::class,
            65 => DragonBreath::class,
            80 => Poltergeist::class,
            90 => DracoMeteor::class
        ];
    }
}