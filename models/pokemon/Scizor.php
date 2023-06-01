<?php

namespace models\pokemon;

use models\moves\BugBite;
use models\moves\BulletPunch;
use models\moves\IronTail;
use models\moves\BugBuzz;

class Scizor extends Pokemon
{
    protected array $type = ["bug", "steel"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return true;
    }

    public static function getAvailableMoves(): array
    {
        return ["BugBite", "Bulletpunch", "IronTail", "BugBuzz"];
    }
}