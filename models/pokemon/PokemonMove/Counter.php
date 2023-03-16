<?php

namespace pokemon\PokemonMove;

class Counter extends PokemonMove
{
    protected string $type = "fighting";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["dark", "ice", "rock", "normal", "steel", "legendary"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["bug", "fairy", "fly", "ghost", "poison", "psychic", "legendary"];
    }

    public function getDamage(): int
    {
        return 12;
    }
}