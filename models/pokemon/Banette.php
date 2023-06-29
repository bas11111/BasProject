<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Astonish;
use models\moves\FeintAttack;
use models\moves\Hex;
use models\moves\Poltergeist;
use models\moves\Snarl;

class Banette extends Pokemon
{
    protected array $type = ["ghost"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Snarl::class,
            4 => Hex::class,
            21 => Acid::class,
            44 => FeintAttack::class,
            61 => Astonish::class,
            80 => Poltergeist::class
        ];
    }
}