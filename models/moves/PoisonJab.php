<?php

namespace models\moves;

class PoisonJab extends Move
{
    protected string $type = "poison";

    protected bool $charged = false;

    function getEffectiveAgainst(): array
    {
        return ["fairy", "grass"];
    }

    function getNotEffectiveAgainst(): array
    {
        return ["ghost", "grounds", "poison", "rock", "steel". "legendary"];
    }

    public function getDamage(): int
    {
        return 10;
    }
}