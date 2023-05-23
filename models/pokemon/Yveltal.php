<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\FeintAttack;
use models\moves\Hurricane;
use models\moves\Snarl;

class Yveltal extends Pokemon
{
    protected array $type = ["dark", "fly"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["Snarl", "AirSlash", "FeintAttack", "Hurricane"];
    }
}