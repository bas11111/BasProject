<?php

namespace pokemon\PokemonMove;

class LegendarySmash extends PokemonMove
{
    protected string $type = "legendary";

    protected bool $charged = false;

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
        return 30;
    }
}