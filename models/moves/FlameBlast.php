<?php

namespace models\moves;

class FlameBlast extends Move
{
    protected string $type = 'fire';
    protected bool $charged = true;

    public function getDamage(): int
    {
        return 110;
    }

    function getEffectiveAgainst(): array
    {
        return ["bug", "steel", "grass", "ice"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["rock", "fire", "water", "dragon", "legendary"];
    }
}