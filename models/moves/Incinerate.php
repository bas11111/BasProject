<?php

namespace models\moves;

class Incinerate extends Move
{
    protected string $type = "fire";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["bug", "grass", "ice", "steel"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dragon", "fire", "rock", "water", "legendary"];
    }

    public function getDamage(): int
    {
        return 29;
    }
}