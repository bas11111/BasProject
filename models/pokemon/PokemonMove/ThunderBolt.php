<?php

namespace pokemon\PokemonMove;

class ThunderBolt extends PokemonMove
{
    protected string $type = "electric";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return ["fly", "water"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dragon", "electric", "grass", "ground", "legendary"];
    }

    public function getDamage(): int
    {
        return 100;
    }
}