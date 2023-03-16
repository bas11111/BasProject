<?php

namespace pokemon\PokemonMove;

class Snarl extends PokemonMove
{
    protected string $type = "dark";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["ghost", "psychic"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dark", "fairy", "fighting", "legendary"];
    }

    public function getDamage(): int
    {
        return 12;
    }
}