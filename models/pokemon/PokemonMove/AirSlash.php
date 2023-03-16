<?php

namespace pokemon\PokemonMove;

class AirSlash extends PokemonMove
{
    protected string $type = "fly";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["bug", 'fighting', "grass"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["electric", "rock", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 14;
    }
}