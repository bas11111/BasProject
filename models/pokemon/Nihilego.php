<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\PoisonJab;
use models\moves\RockThrow;
use models\moves\Rollout;
use models\moves\SludgeWave;
use models\moves\StoneEdge;

class Nihilego extends Pokemon
{
    protected array $type = ["rock", "poison"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Acid::class,
            14 => RockThrow::class,
            29 => PoisonJab::class,
            46 => Rollout::class,
            80 => SludgeWave::class,
            90 => StoneEdge::class,
        ];
    }
}