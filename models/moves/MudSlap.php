<?php

namespace models\moves;

class MudSlap extends Move
{
    protected string $type = "ground";

    protected bool $charged = false;

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
        return 18;
    }
}