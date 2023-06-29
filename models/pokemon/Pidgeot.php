<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Cut;
use models\moves\Gust;
use models\moves\HiddenPower;
use models\moves\HornAttack;
use models\moves\Hurricane;

class Pidgeot extends Pokemon
{
    protected array $type = ["fly", "normal"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => AirSlash::class,
            10 => Cut::class,
            30 => HiddenPower::class,
            50 => Gust::class,
            70 => HornAttack::class,
            80 => Hurricane::class
        ];
    }
}