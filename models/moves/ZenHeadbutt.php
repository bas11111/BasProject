<?php

namespace models\moves;

class ZenHeadbutt extends Move
{
    protected string $type = "psychic";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["fighting", "poison"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dark", "psychic", "steel", "legendary"];
    }

    public function getDamage(): int
    {
        return 12;
    }
}