<?php

namespace models\moves;

class HornAttack extends Move
{
    protected string $type = "normal";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return [""];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["ghost", "rock", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 40;
    }
}