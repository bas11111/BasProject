<?php

namespace pokemon\PokemonMove;

class LegendaryBurst extends PokemonMove
{
    protected string $type = "legendary";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return [
            "bug",
            "dark",
            "dragon",
            "electric",
            "fairy",
            "fire",
            "air",
            "ghost",
            "grass",
            "ground",
            "ice",
            "normal",
            "poison",
            "psychic",
            "rock",
            "steel",
            "water",
        ];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["fighting"];
    }

    public function getDamage(): int
    {
        return 170;
    }
}