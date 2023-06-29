<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\Confusion;
use models\moves\Counter;
use models\moves\FocusBlast;
use models\moves\FutureSight;
use models\moves\RockSmash;
use models\moves\ZenHeadbutt;

class Gallade extends Pokemon
{
    protected array $type = ["fighting", "psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Counter::class,
            11 => ZenHeadbutt::class,
            25 => Confusion::class,
            40 => RockSmash::class,
            60 => Charm::class,
            80 => FutureSight::class,
            90 => FocusBlast::class
        ];
    }
}