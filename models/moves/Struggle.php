<?php

namespace models\moves;

class Struggle extends Move
{
    protected string $type = "normal";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return [];
    }

    function getNotEffectiveAgainst(): array
    {
        return [];
    }

    public function getDamage(): int
    {
        return 3;
    }
}