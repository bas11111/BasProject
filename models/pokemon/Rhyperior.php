<?php

namespace models\pokemon;

use models\moves\Cut;
use models\moves\Earthquake;
use models\moves\MudShot;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\Rollout;
use models\moves\StoneEdge;

class Rhyperior extends Pokemon
{
    protected array $type = ["rock", "ground"];
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
            9 => Cut::class,
            21 => RockThrow::class,
            44 => Rollout::class,
            61 => MudShot::class,
            80 => StoneEdge::class,
            90 => Earthquake::class,
        ];
    }
}