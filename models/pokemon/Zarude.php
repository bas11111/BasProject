<?php

namespace models\pokemon;

use models\moves\BulletSeed;
use models\moves\Snarl;
use models\moves\FeintAttack;
use models\moves\SolarBeam;

class Zarude extends Pokemon
{
    protected array $type = ["grass", "dark"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["Bulletseed", "Snarl", "FeintAttack", "SolarBeam"];
    }
}