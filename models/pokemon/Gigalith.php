<?php

namespace models\pokemon;

use models\moves\MudShot;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\Rollout;
use models\moves\StoneEdge;

class Gigalith extends Pokemon
{
    protected array $type = ["rock"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function getAvailableMoves(): array
    {
        return [
            1 => RockThrow::class,
            9 => MudSlap::class,
            20 => MudShot::class,
            37 => Rollout::class,
            80 => StoneEdge::class
        ];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }
}