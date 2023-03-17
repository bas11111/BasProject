<?php

namespace models\moves;

class DragonBreath extends Move
{
    protected string $type = "dragon";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["dragon"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["fairy", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 6;
    }
}