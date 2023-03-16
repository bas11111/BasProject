<?php

namespace pokemon\PokemonMove;

class DracoMeteor extends PokemonMove
{

    protected string $type = "dragon";

    protected bool $charged = true;

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
        return 150;
    }
}