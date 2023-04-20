<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Confusion;
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

    public function getAvailableMoves(): array
    {
        return ["Cut", "Confusion", "BulletPunch", "HornAttack"];
    }
}