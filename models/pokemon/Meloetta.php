<?php

namespace models\pokemon;

use models\moves\Confusion;
use models\moves\Cut;
use models\moves\FutureSight;
use models\moves\HiddenPower;
use models\moves\HornAttack;
use models\moves\ZenHeadbutt;

class Meloetta extends Pokemon
{
    protected array $type = ["normal", "psychic"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Cut::class,
            12 => Confusion::class,
            30 => HiddenPower::class,
            45 => ZenHeadbutt::class,
            60 => HornAttack::class,
            80 => FutureSight::class
        ];
    }
}