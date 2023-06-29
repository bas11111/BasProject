<?php

namespace models\pokemon;

use models\moves\Cut;
use models\moves\DarkPulse;
use models\moves\FeintAttack;
use models\moves\Snarl;
use models\moves\ZenHeadbutt;

class Umbreon extends Pokemon
{
    protected array $type = ["dark"];
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
            21 => ZenHeadbutt::class,
            43 => FeintAttack::class,
            58 => Cut::class,
            80 => DarkPulse::class
        ];
    }
}