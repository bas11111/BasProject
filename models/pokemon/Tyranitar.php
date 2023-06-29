<?php

namespace models\pokemon;

use models\moves\DarkPulse;
use models\moves\FeintAttack;
use models\moves\Hex;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\Rollout;
use models\moves\Snarl;
use models\moves\StoneEdge;

class Tyranitar extends Pokemon
{
    protected array $type = ["rock", "dark"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => RockThrow::class,
            12 => Snarl::class,
            25 => Hex::class,
            34 => Rollout::class,
            47 => FeintAttack::class,
            61 => MudSlap::class,
            80 => StoneEdge::class,
            90 => DarkPulse::class
        ];
    }
}