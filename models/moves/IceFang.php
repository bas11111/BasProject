<?php

namespace models\moves;

class IceFang extends Move
{
    protected string $type = "ice";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["dragon", "fly", "grass", "ground"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["fire", "ice", "steel", "water", "legendary"];
    }

    public function getDamage(): int
    {
        return 12;
    }
}