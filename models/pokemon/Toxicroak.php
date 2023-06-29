<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Counter;
use models\moves\FocusBlast;
use models\moves\PoisonJab;
use models\moves\RockSmash;
use models\moves\SludgeWave;

class Toxicroak extends Pokemon
{
    protected array $type = ["poison", "fighting"];
    protected int $shields = 2;
    protected int $potions = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => Acid::class,
            18 => Counter::class,
            40 => PoisonJab::class,
            63 => RockSmash::class,
            80 => SludgeWave::class,
            90 => FocusBlast::class
        ];
    }
}