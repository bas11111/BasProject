<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Cut;
use models\moves\HiddenPower;
use models\moves\HornAttack;
use models\moves\Snarl;

class Snorlax extends Pokemon
{
    protected array $type = ["normal"];
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
            31 => Snarl::class,
            50 => HiddenPower::class,
            70 => BulletPunch::class,
            80 => HornAttack::class,
        ];
    }
}