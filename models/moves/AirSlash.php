<?php

namespace models\moves;

class AirSlash extends Move
{
    protected string $type = "fly";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["bug", 'fighting', "grass"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["electric", "rock", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 14;
    }
}