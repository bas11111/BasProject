<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Counter;
use models\moves\FocusBlast;
use models\moves\Snarl;

class Machamp extends Pokemon
{
    protected array $type = ["fighting"];
    protected int $shields = 2;


    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new Counter(), new Snarl(), new BulletPunch(), new FocusBlast()];
    }
}