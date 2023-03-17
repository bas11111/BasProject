<?php

namespace models\moves;

class FutureSight extends Move
{
    protected string $type = "psychic";

    protected bool $charged = true;

    function getEffectiveAgainst(): array
    {
        return ["fighting", "poison"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dark", "psychic", "steel"];
    }

    public function getDamage(): int
    {
        return 120;
    }
}