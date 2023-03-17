<?php

namespace models\pokemon;

use models\moves\BulletSeed;
use models\moves\MudSlap;
use models\moves\RockThrow;
use models\moves\SolarBeam;

class Meganium extends Pokemon
{
    protected int $health = 455;
    protected int $maxHealth = 455;
    protected array $type = ["grass"];


    public function getWeakAgainst(): array
    {
        return ["fire", "normal", "legendary"];
    }

    public function getCombatPower(): int
    {
        return 2524;
    }

    public function getChargedAttack(): int
    {
        return 82;
    }

    public function hasArtifact(): bool
    {
        return false;
    }

    public function getMoves(): array
    {
        return [new BulletSeed(), new MudSlap(), new RockThrow(), new SolarBeam()];
    }
}