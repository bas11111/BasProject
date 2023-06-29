<?php

namespace models\pokemon;

use models\moves\Confusion;
use models\moves\Cut;
use models\moves\FutureSight;
use models\moves\LegendaryBurst;
use models\moves\LegendarySmash;
use models\moves\ZenHeadbutt;

class Mewtwo extends Pokemon
{
    protected array $type = ["legendary"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Confusion::class,
            22 => ZenHeadbutt::class,
            40 => LegendarySmash::class,
            61 => Cut::class,
            80 => FutureSight::class,
            100 => LegendaryBurst::class,
        ];
    }
}