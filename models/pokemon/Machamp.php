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
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return ["Counter", "Snarl", "BulletPunch", "FocusBlast"];
    }
}