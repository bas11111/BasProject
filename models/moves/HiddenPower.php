<?php

namespace models\moves;

class HiddenPower extends Move
{
    protected string $type = "normal";

    protected bool $charged = false;

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
        return 15;
    }
}