<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\BulletSeed;
use models\moves\MagicalLeaf;
use models\moves\PoisonJab;
use models\moves\SolarBeam;

class Venusaur extends Pokemon
{
    protected array $type = ["grass"];
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
            23 => Acid::class,
            40 => MagicalLeaf::class,
            61 => PoisonJab::class,
            80 => SolarBeam::class
        ];
    }
}