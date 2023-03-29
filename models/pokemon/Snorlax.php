<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Confusion;
use models\moves\Cut;
use models\moves\HornAttack;

class Snorlax extends Pokemon
{
    protected int $health = 520;
    protected int $maxHealth = 520;
    protected int $CP = 2190;
    protected array $type = ["normal"];
    protected int $shields = 2;

    public function getWeakAgainst(): array
    {
        return ["ice", "rock", "legendary", "fighting"];
    }

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new Cut(), new Confusion(), new BulletPunch(), new HornAttack()];
    }
}