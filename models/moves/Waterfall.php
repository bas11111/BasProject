<?php

namespace models\moves;

class Waterfall extends Move
{
    protected string $type = "water";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["fire", "ground", "rock"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dragon", "grass", "water", "legendary"];
    }

    public function getDamage(): int
    {
        return 16;
    }
}