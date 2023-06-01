<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Hex;
use models\moves\SludgeWave;
use models\moves\PoisonJab;

class Silvally extends Pokemon
{
    protected array $type = ["poison"];
    protected int $shields = 2;
    protected int $potions = 2;

    public static function getAvailableMoves(): array
    {
        return ["Acid", "PoisonJab", "Hex", "SludgeWave"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}