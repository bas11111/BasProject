<?php

namespace pokemon\PokemonMove;

class DragonBreath extends PokemonMove
{
    protected string $type = "dragon";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["dragon"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["fairy", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 6;
    }
}