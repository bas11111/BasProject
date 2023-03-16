<?php

namespace pokemon;

use pokemon\PokemonMove\BulletPunch;
use pokemon\PokemonMove\MudSlap;
use pokemon\PokemonMove\RockThrow;
use pokemon\PokemonMove\StoneEdge;

class Rhyperior extends Pokemon
{

    protected int $health = 536;
    protected int $maxHealth = 536;

    protected array $type = ["rock", "ground"];


    public function getWeakAgainst(): array
    {
        return ["water", "dark", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 3968;
    }

    public function getChargedAttack(): int
    {
        return 96;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new RockThrow(), new MudSlap(), new BulletPunch(), new StoneEdge()];
    }
}
