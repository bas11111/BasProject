<?php
require 'Pokemon.php';

use pokemon\PokemonMove\BulletPunch;
use pokemon\PokemonMove\RockThrow;
use pokemon\PokemonMove\Snarl;
use pokemon\PokemonMove\StoneEdge;

class Tyranitar extends Pokemon
{

    protected int $health = 531;
    protected int $maxHealth = 531;

    protected array $type = ["rock", "dark"];


    public function getWeakAgainst(): array
    {
        return ["grass", "fly", "fairy", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 4079;
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
        return [new RockThrow(), new Snarl(), new BulletPunch(), new StoneEdge()];
    }
}