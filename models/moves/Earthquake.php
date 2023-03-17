<?php

namespace models\moves;

class Earthquake extends Move
{
    protected string $type = "ground";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return ["electric", "fire", "poison", "rock", "steel"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["bug", "fly", "grass", "legendary"];
    }

    public function getDamage(): int
    {
        return 140;
    }
}