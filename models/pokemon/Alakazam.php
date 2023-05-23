<?php

namespace models\pokemon;

use models\moves\Confusion;
use models\moves\ZenHeadbutt;
use models\moves\FutureSight;
use models\moves\Hex;

class Alakazam extends Pokemon
{
    protected array $type = ["psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function getAvailableMoves(): array
    {
        return ["Confusion", "Hex", "ZenHeadbutt", "FutureSight"];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }
}