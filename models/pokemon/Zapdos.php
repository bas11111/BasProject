<?php
require 'Pokemon.php';

use pokemon\PokemonMove\AirSlash;
use pokemon\PokemonMove\BulletPunch;
use pokemon\PokemonMove\Spark;
use pokemon\PokemonMove\ThunderBolt;

class Zapdos extends Pokemon
{

    protected int $health = 389;
    protected int $maxHealth = 389;

    protected array $type = ["electric", "fly"];

    public function getWeakAgainst(): array
    {
        return ["electric", "ground", "dragon", "grass", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 3741;
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
        return [new AirSlash(), new Spark(), new BulletPunch(), new ThunderBolt()];
    }
}
