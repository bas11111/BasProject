<?php

namespace models\moves;

class DazzlingDream extends Move
{
    protected string $type = "fairy";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return ["dark", "dragon", "fighting"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["fire", "poison", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 100;
    }
}