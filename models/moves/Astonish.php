<?php

namespace models\moves;

class Astonish extends Move
{
    protected string $type = "ghost";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["ghost", "psychic"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dark", "normal", "legendary"];
    }

    public function getDamage(): int
    {
        return 8;
    }
}