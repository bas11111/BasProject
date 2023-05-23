<?php

namespace models\moves;

class VoltSwitch extends Move
{
    protected string $type = "electric";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["fly", "water"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["dragon", "electric", "grass", "ground", "legendary"];
    }

    public function getDamage(): int
    {
        return 14;
    }
}