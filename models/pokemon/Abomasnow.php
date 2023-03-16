<?php
use pokemon\PokemonMove\Avalanche;
use pokemon\PokemonMove\BulletSeed;
use pokemon\PokemonMove\DragonBreath;
use pokemon\PokemonMove\IceKick;

class Abomasnow extends Pokemon
{
    protected int $health = 420;
    protected int $maxHealth = 420;

    protected array $type = ["ice", "grass"];


    public function getWeakAgainst(): array
    {
        return ["electric", "legendary", "grass"];
    }

    public function getCombatPower(): int
    {
        return 2472;
    }

    public function getChargedAttack(): int
    {
        return 116;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new IceKick(), new BulletSeed(), new DragonBreath(), new Avalanche()];
    }
}