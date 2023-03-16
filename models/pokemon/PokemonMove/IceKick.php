<?php

namespace pokemon\PokemonMove;

class IceKick extends PokemonMove
{
    protected string $type = 'ice';
    protected bool $charged = false;

    public function getDamage(): int
    {
        return 20;
    }

    public function getEffectiveAgainst(): array
    {
        return ["grass", "fly", "ground", "dragon"];
    }


    public function getNotEffectiveAgainst(): array
    {
        return ["water", "ice", "fire", "legendary"];
    }
}