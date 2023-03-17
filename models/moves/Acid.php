<?php

namespace models\moves;

class Acid extends Move
{
    protected string $type = "poison";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["fairy", "grass"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["ghost", "ground", "poison", "rock", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 9;
    }
}