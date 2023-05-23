<?php

namespace models\pokemon;

use models\moves\Cut;
use models\moves\Confusion;
use models\moves\HiddenPower;
use models\moves\HornAttack;

class Meloetta extends Pokemon
{
    protected array $type = ["normal", "psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["Cut", "Confusion", "HiddenPowers", "HornAttack"];
    }
}