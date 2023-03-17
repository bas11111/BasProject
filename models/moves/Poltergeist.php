<?php

namespace models\moves;

class Poltergeist extends Move
{
    protected string $type = "ghost";

    protected bool $charged = true;

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
        return 140;
    }
}