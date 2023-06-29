<?php

namespace models\pokemon;

use models\moves\Cut;
use models\moves\Earthquake;
use models\moves\MudShot;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\Rollout;

class Rampardos extends Pokemon
{
    protected array $type = ["rock"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => RockThrow::class,
            22 => Rollout::class,
            45 => MudSlap::class,
            65 => Cut::class,
            80 => Earthquake::class
        ];
    }
}