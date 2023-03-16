<?php

namespace pokemon\PokemonMove;

class BulletSeed extends PokemonMove
{
    protected string $type = "grass";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["ground", "rock", "water"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["bug", "dragon", "fly", "fire", "grass", "poison", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 8;
    }
}