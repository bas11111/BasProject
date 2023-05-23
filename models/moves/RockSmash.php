<?php

namespace models\moves;

class RockSmash extends Move
{
    protected string $type = "fighting";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["dark", "ice", "normal", "rock", "steel", "legendary"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["bug", "fairy", "fly", "ghost", "poison", "psychic"];
    }

    public function getDamage(): int
    {
        return 15;
    }
}