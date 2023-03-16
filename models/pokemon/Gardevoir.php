<?php

namespace pokemon;

use pokemon\PokemonMove\Charm;
use pokemon\PokemonMove\Confusion;
use pokemon\PokemonMove\DazzlingDream;
use pokemon\PokemonMove\Hex;

class Gardevoir extends Pokemon
{
    protected int $health = 381;
    protected int $maxHealth = 381;
    protected array $type = ["fairy", "psychic"];

    public function getWeakAgainst(): array
    {
        return ["poison", "steel", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 3267;
    }

    public function getChargedAttack(): int
    {
        return 111;
    }

    public function getMoves(): array
    {
        return [new Charm(), new Confusion(), new Hex(), new DazzlingDream()];
    }
}