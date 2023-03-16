<?php

namespace pokemon\PokemonMove;

class FlameBlast extends PokemonMove
{
    protected string $type = 'fire';
    protected bool $charged = true;

    public function getDamage(): int
    {
        return 110;
    }

    function getEffectiveAgainst(): array
    {
        return ["bug", "steel", "grass", "ice"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["rock", "fire", "water", "dragon", "legendary"];
    }
}