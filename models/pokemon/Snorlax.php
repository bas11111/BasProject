<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\HiddenPower;
use models\moves\Cut;
use models\moves\HornAttack;

class Snorlax extends Pokemon
{
    protected array $type = ["normal"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return ["Cut", "HiddenPower", "BulletPunch", "HornAttack"];
    }
}