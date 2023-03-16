<?php

namespace pokemon;

use pokemon\PokemonMove\Confusion;
use pokemon\PokemonMove\FutureSight;
use pokemon\PokemonMove\LegendaryBurst;
use pokemon\PokemonMove\LegendarySmash;

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
