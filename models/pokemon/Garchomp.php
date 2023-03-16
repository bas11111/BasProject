<?php

namespace pokemon;

use pokemon\PokemonMove\DragonBreath;
use pokemon\PokemonMove\Earthquake;
use pokemon\PokemonMove\FireBreath;
use pokemon\PokemonMove\MudSlap;

class Garchomp extends Pokemon
{
    protected int $health = 471;
    protected int $maxHealth = 471;

    protected array $type = ["dragon", "ground"];

    public function getWeakAgainst(): array
    {
        return ["dragon", "fairy", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 4218;
    }

    public function getChargedAttack(): int
    {
        return 124;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new DragonBreath(), new MudSlap(), new FireBreath(), new Earthquake()];
    }
}