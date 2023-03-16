<?php

namespace pokemon\PokemonMove;

class Charm extends PokemonMove
{
    protected string $type = "fairy";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["dark", "dragon", "fighting"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["fire", "poison", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 20;
    }
}