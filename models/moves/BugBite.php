<?php

namespace models\moves;

class BugBite extends Move
{
    protected string $type = "bug";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["grass", "dark", "psychic"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["fairy", "fighting", "fly", "fire", "ghost", "poison", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 5;
    }
}