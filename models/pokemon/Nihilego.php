<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\RockThrow;
use models\moves\PoisonJab;
use models\moves\SludgeWave;

class Nihilego extends Pokemon
{
    protected array $type = ["rock", "poison"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["Acid", "RockThrow", "PoisonJab", "Sludgewave"];
    }
}