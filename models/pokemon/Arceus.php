<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\Confusion;
use models\moves\DazzlingDream;
use models\moves\LegendaryBurst;
use models\moves\LegendarySmash;
use models\moves\ZenHeadbutt;

class Arceus extends Pokemon
{
    protected array $type = ["legendary"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => LegendarySmash::class,
            15 => Charm::class,
            40 => ZenHeadbutt::class,
            66 => Confusion::class,
            80 => DazzlingDream::class,
            100 => LegendaryBurst::class
        ];
    }
}