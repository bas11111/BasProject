<?php

namespace pokemon;

use pokemon\PokemonMove\BulletPunch;
use pokemon\PokemonMove\FireBreath;
use pokemon\PokemonMove\FlameBlast;
use pokemon\PokemonMove\MudSlap;

class Entei extends Pokemon
{

    protected int $health = 411;
    protected int $maxHealth = 411;

    protected array $type = ["fire"];

    public function getWeakAgainst(): array
    {
        return ["fly", "water", "ground", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 3681;
    }

    public function getChargedAttack(): int
    {
        return 122;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new FireBreath(), new BulletPunch(), new MudSlap(), new FlameBlast()];
    }
}