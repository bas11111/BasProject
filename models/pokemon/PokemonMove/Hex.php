<?php

namespace pokemon\PokemonMove;

class Hex extends PokemonMove
{
    protected string $type = "ghost";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["ghost", "psychic"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dark", "normal", "legendary"];
    }

    public function getDamage(): int
    {
        return 10;
    }
}