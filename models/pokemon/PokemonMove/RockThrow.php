<?php

namespace pokemon\PokemonMove;

class RockThrow extends PokemonMove
{
    protected string $type = "rock";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["bug", "fly", "fire", "ice"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["fighting", "ground", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 12;
    }
}