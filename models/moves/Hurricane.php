<?php

namespace models\moves;

class Hurricane extends Move
{
    protected string $type = "fly";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return ["bug", "fighting", "grass"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["electric", "rock", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 110;
    }
}