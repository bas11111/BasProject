<?php

namespace models\pokemon;

use models\moves\DarkPulse;
use models\moves\FeintAttack;
use models\moves\FireBreath;
use models\moves\FlameBlast;
use models\moves\Incinerate;
use models\moves\Snarl;

class Houndoom extends Pokemon
{
    protected array $type = ["dark", "fire"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Snarl::class,
            8 => FireBreath::class,
            21 => Incinerate::class,
            37 => FeintAttack::class,
            80 => DarkPulse::class,
            90 => FlameBlast::class,
        ];
    }
}