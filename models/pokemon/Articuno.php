<?php
require 'Pokemon.php';
use pokemon\PokemonMove\AirSlash;
use pokemon\PokemonMove\Avalanche;
use pokemon\PokemonMove\IceKick;
use pokemon\PokemonMove\WaterGun;

class Articuno extends Pokemon
{

    protected int $health = 397;
    protected int $maxHealth = 397;

    protected array $type = ["ice", "fly"];

    public function getWeakAgainst(): array
    {
        return ["fire", "fighting", "legendary", "rock", "normal", "dark", "fly", "electric"];
    }

    public function getCombatPower(): int
    {
        return 3223;
    }

    public function getChargedAttack(): int
    {
        return 118;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new AirSlash(), new WaterGun(), new IceKick(), new Avalanche()];
    }
}
