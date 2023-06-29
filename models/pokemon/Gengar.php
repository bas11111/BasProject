<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Astonish;
use models\moves\Hex;
use models\moves\PoisonJab;
use models\moves\Poltergeist;
use models\moves\SludgeWave;
use models\moves\Snarl;

class Gengar extends Pokemon
{
    protected array $type = ["ghost", "poison"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Acid::class,
            6 => Snarl::class,
            19 => PoisonJab::class,
            36 => Hex::class,
            50 => Astonish::class,
            80 => SludgeWave::class,
            90 => Poltergeist::class
        ];
    }
}