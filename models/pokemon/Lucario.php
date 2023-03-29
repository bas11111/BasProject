<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Counter;
use models\moves\Cut;
use models\moves\FocusBlast;

class Lucario extends Pokemon
{
    protected int $health = 432;
    protected int $maxHealth = 432;
    protected int $CP = 4061;
    protected array $type = ["fighting"];
    protected int $shields = 2;

    public function getWeakAgainst(): array
    {
        return ["fly", "fairy"];
    }

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public function getMoves(): array
    {
        return [new Counter(), new BulletPunch(), new Cut(), new FocusBlast()];
    }
}