<?php

namespace models\moves;

class MudShot extends Move
{
    protected string $type = "ground";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["electric", "fire", "poison", "rock", "steel"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["grass", "fly", "bug", "legendary"];
    }

    public function getDamage(): int
    {
        return 5;
    }
}