<?php

namespace pokemon\PokemonMove;

class Confusion extends PokemonMove
{

    protected string $type = "psychic";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["fighting", "poison"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dark", "psychic", "steel"];
    }

    public function getDamage(): int
    {
        return 20;
    }
}