<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\Confusion;
use models\moves\FutureSight;
use models\moves\Hex;
use models\moves\ZenHeadbutt;

class Alakazam extends Pokemon
{
    protected array $type = ["psychic"];
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
            8 => ZenHeadbutt::class,
            25 => Hex::class,
            40 => Charm::class,
            80 => FutureSight::class
        ];
    }
}