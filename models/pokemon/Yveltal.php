<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\DarkPulse;
use models\moves\FeintAttack;
use models\moves\Gust;
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
        return [
            1 => Snarl::class,
            22 => AirSlash::class,
            38 => FeintAttack::class,
            59 => Gust::class,
            80 => Hurricane::class,
            90 => DarkPulse::class
        ];
    }
}