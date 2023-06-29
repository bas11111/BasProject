<?php

namespace models\pokemon;

use models\moves\Confusion;
use models\moves\Cut;
use models\moves\FutureSight;
use models\moves\Snarl;
use models\moves\ZenHeadbutt;

class Espeon extends Pokemon
{
    protected array $type = ["psychic"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Snarl::class,
            4 =>  Confusion::class,
            25 => Cut::class,
            60 => ZenHeadbutt::class,
            80 => FutureSight::class
        ];
    }
}