<?php

namespace models\moves;

class FairyWind extends Move
{
    protected string $type = "fairy";

    protected bool $charged = false;

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
        return 9;
    }
}