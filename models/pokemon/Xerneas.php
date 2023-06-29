<?php

namespace models\pokemon;

use models\moves\Charm;
use models\moves\Confusion;
use models\moves\DazzlingDream;
use models\moves\FairyWind;
use models\moves\ZenHeadbutt;

class Xerneas extends Pokemon
{
    protected array $type = ["fairy"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Charm::class,
            20 => ZenHeadbutt::class,
            47 => Confusion::class,
            62 => FairyWind::class,
            80 => DazzlingDream::class
        ];
    }
}