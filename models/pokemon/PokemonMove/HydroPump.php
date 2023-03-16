<?php

namespace pokemon\PokemonMove;

class HydroPump extends PokemonMove
{
    protected string $type = "water";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return ["fire", "ground", "rock"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dragon", "grass", "water", "legendary"];
    }

    public function getDamage(): int
    {
        return 130;
    }
}