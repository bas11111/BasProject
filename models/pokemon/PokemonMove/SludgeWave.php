<?php

namespace pokemon\PokemonMove;

class SludgeWave extends PokemonMove
{
    protected string $type = "poison";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return ["fairy", "grass"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["ghost", "ground", "poison", "rock", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 110;
    }
}