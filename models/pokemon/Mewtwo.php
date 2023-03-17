<?php

namespace models\pokemon;

use models\moves\Confusion;
use models\moves\FutureSight;
use models\moves\LegendaryBurst;
use models\moves\LegendarySmash;

class Mewtwo extends Pokemon
{
    protected int $health = 550;
    protected int $maxHealth = 550;

    protected array $type = ["legendary"];

    public function getWeakAgainst(): array
    {
        return ["fighting"];
    }

    public function getCombatPower(): int
    {
        return 4452;
    }

    public function getChargedAttack(): int
    {
        return 140;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new LegendarySmash(), new LegendaryBurst(), new Confusion(), new FutureSight()];
    }
}
