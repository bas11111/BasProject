<?php

namespace models\pokemon;

use models\moves\Astonish;
use models\moves\FeintAttack;
use models\moves\Hex;
use models\moves\PoisonJab;
use models\moves\Poltergeist;
use models\moves\Snarl;

class Spectrier extends Pokemon
{
    protected array $type = ["ghost"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => PoisonJab::class,
            21 => Hex::class,
            36 => Snarl::class,
            47 => FeintAttack::class,
            61 => Astonish::class,
            80 => Poltergeist::class
        ];
    }
}