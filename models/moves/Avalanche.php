<?php

namespace models\moves;

class Avalanche extends Move
{
    protected string $type = 'ice';

    protected bool $charged = true;

    public function getDamage(): int
    {
        return 80;
    }

    public function getEffectiveAgainst(): array
    {
        return ["grass", "fly", "ground", "dragon"];
    }


    public function getNotEffectiveAgainst(): array
    {
        return ["water", "ice", "fire", "legendary"];
    }
}