<?php

namespace pokemon;

use pokemon\PokemonMove\BulletPunch;
use pokemon\PokemonMove\Confusion;
use pokemon\PokemonMove\Cut;
use pokemon\PokemonMove\HornAttack;

class Snorlax extends Pokemon
{
    protected int $health = 775;
    protected int $maxHealth = 775;

    protected array $type = ["normal"];


    public function getWeakAgainst(): array
    {
        return ["ice", "rock", "legendary", "fighting"];
    }

    public function getCombatPower(): int
    {
        return 2190;
    }

    public function getChargedAttack(): int
    {
        return 32;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new Cut(), new Confusion(), new BulletPunch(), new HornAttack()];
    }
}
