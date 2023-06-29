<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Astonish;
use models\moves\Hex;
use models\moves\PoisonJab;
use models\moves\SludgeWave;
use models\moves\Snarl;

class Silvally extends Pokemon
{
    protected array $type = ["poison"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Acid::class,
            21 => Snarl::class,
            34 => Astonish::class,
            49 => PoisonJab::class,
            61 => Hex::class,
            80 => SludgeWave::class
        ];
    }
}