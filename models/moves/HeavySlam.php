<?php

namespace models\moves;

class HeavySlam extends Move
{
    protected string $type = "steel";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return ["fairy", "ice", "rock"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["electric", "fire", "steel", "water", "water", "legendary"];
    }

    public function getDamage(): int
    {
        return 70;
    }
}