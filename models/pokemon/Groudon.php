<?php

namespace models\pokemon;

use models\moves\DragonBreath;
use models\moves\Earthquake;
use models\moves\MudShot;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\Rollout;
use models\moves\StoneEdge;

class Groudon extends Pokemon
{
    protected array $type = ["ground"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => MudSlap::class,
            6 => Rollout::class,
            11 => DragonBreath::class,
            34 => RockThrow::class,
            50 => MudShot::class,
            80 => StoneEdge::class,
            90 => Earthquake::class
        ];
    }
}