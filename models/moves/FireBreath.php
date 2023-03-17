<?php

namespace models\moves;

class FireBreath extends Move
{
    protected string $type = 'fire';
    protected bool $charged = false;

    public function getDamage(): int
    {
        return 25;
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