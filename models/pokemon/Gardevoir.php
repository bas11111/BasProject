<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\Confusion;
use models\moves\DazzlingDream;
use models\moves\FairyWind;
use models\moves\ZenHeadbutt;

class Gardevoir extends Pokemon
{
    protected array $type = ["fairy", "psychic"];
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
            23 => ZenHeadbutt::class,
            40 => FairyWind::class,
            53 => Charm::class,
            80 => DazzlingDream::class
        ];
    }
}