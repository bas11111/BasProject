<?php

namespace models\pokemon;

use models\moves\BulletSeed;
use models\moves\DarkPulse;
use models\moves\FeintAttack;
use models\moves\MagicalLeaf;
use models\moves\Snarl;
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
        return [
            1 => BulletSeed::class,
            18 => Snarl::class,
            41 => FeintAttack::class,
            56 => MagicalLeaf::class,
            80 => SolarBeam::class,
            90 => DarkPulse::class
        ];
    }
}