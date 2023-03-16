<?php
require 'Pokemon.php';

use pokemon\PokemonMove\BulletPunch;
use pokemon\PokemonMove\Counter;
use pokemon\PokemonMove\Cut;
use pokemon\PokemonMove\FocusBlast;

class Lucario extends Pokemon
{

    protected int $health = 418;
    protected int $maxHealth = 418;

    protected array $type = ["fighting"];

    public function getWeakAgainst(): array
    {
        return ["fly", "fairy"];
    }

    public function getCombatPower(): int
    {
        return 4061;
    }

    public function getChargedAttack(): int
    {
        return 120;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new Counter(), new BulletPunch(), new Cut(), new FocusBlast()];
    }
}
