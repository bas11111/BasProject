<?php

namespace models\moves;

class BulletPunch extends Move
{
    protected string $type = "steel";

    protected bool $charged = false;

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
        return 9;
    }
}