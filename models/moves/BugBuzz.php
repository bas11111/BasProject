<?php

namespace models\moves;

class BugBuzz extends Move
{
    protected string $type = "bug";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return ["grass", "dark", "psychic"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["fairy", "fighting", "fly", "fire", "ghost", "poison", "steel"];
    }

    public function getDamage(): int
    {
        return 100;
    }
}