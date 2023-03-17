<?php

namespace models\pokemon;

use models\moves\Acid;
use models\moves\Hex;
use models\moves\Poltergeist;
use models\moves\Snarl;

class Gengar extends Pokemon
{

    protected int $health = 443;
    protected int $maxHealth = 443;
    protected array $type = ["ghost", "poison"];

    public function getWeakAgainst(): array
    {
        return ["poison", "ghost", "rock", "ground", "steel", "normal", "dark"];
    }

    public function getCombatPower(): int
    {
        return 3027;
    }

    public function getChargedAttack(): int
    {
        return 120;
    }

    public function getMoves(): array
    {
        return [new Acid(), new Hex, new Snarl(), new Poltergeist()];
    }
}