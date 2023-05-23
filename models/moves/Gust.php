<?php

namespace models\moves;

class Gust extends Move
{
    protected string $type = "air";

    protected bool $charged = false;

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
        return 25;
    }
}