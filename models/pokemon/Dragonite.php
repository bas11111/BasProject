<?php

namespace pokemon;

use pokemon\PokemonMove\AirSlash;
use pokemon\PokemonMove\BulletPunch;
use pokemon\PokemonMove\DracoMeteor;
use pokemon\PokemonMove\DragonBreath;

class Dragonite extends Pokemon
{
    protected int $health = 386;
    protected int $maxHealth = 386;
    protected array $type = ["dragon"];


    public function getWeakAgainst(): array
    {
        return ["dragon", "fairy", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 4032;
    }

    public function getChargedAttack(): int
    {
        return 106;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new DragonBreath(), new AirSlash(), new BulletPunch(), new DracoMeteor()];
    }
}
