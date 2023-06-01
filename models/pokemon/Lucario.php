<?php

namespace models\pokemon;

use models\moves\BulletPunch;
use models\moves\Counter;
use models\moves\RockSmash;
use models\moves\FocusBlast;

class Lucario extends Pokemon
{
    protected array $type = ["fighting"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return ["Counter", "BulletPunch", "RockSmash", "FocusBlast"];
    }
}