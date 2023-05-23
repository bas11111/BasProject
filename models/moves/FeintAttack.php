<?php

namespace models\moves;

class FeintAttack extends Move
{
    protected string $type = "dark";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["ghost", "psychic"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dark", "fairy", "fighting", "legendary"];
    }

    public function getDamage(): int
    {
        return 10;
    }
}