<?php

namespace pokemon\PokemonMove;

class DarkPulse extends PokemonMove
{
    protected string $type = "dark";

    protected bool $charged = true;

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
        return 80;
    }
}