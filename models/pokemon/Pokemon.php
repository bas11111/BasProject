<?php

namespace models\pokemon;

use models\moves\AirSlash;
use models\moves\Avalanche;
use models\moves\Move;
use ReflectionClass;

abstract class Pokemon
{
    protected array $type;
    protected int $health;
    protected int $level;
    protected int $maxHealth;
    protected int $CP;
    protected int $shields;
    protected int $potions;

    protected array $moves = [];

    protected static array $environmentDebuffedTypes = [
        "water" => ["fire", "ground"],
        "mountains" => ["ground"],
        "ground" => ["fly"],
        "sky" => ["ground"],
        "caves" => ["ice", "fairy"]
    ];


    public function __construct(int $level, int $CP, int $health, int $maxHealth, array $moves = [])
    {
        $this->level = $level;
        $this->CP = $CP;
        $this->health = $health;
        $this->maxHealth = $maxHealth;
        foreach ($moves as $move) {
            if(($_move = $this->getMove($move)) !== null) {
                $this->moves[] = $_move;
            }
        }
    }

    public function getMove(string $move): ?Move {
        if (in_array($move, $this->getAvailableMoves())) {
            $class = 'models\\moves\\' . $move;
            return new $class();
        }
        return null;
    }

    public function getBestMove(Pokemon $pokemon, Pokemon $opponent) {
        // Check elke move die ik heb
        // Welke move is super effective tegen mijn tegenstander
        // Welke move geeft de meeste schade tegen mijn tegenstander
        // Return deze move

    }
    public function isDeBuffed(string $environment): bool
    {
        return array_key_exists($environment, static::$environmentDebuffedTypes) && in_array($this->type, static::$environmentDebuffedTypes[$environment]);
    }

    public function getType(): array
    {
        return $this->type;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth(int $health)
    {
        $this->health = $health;
    }

    public function getCombatPower()
    {
        return $this->CP;
    }

    public function setCombatPower(int $CP)
    {
        $this->CP = $CP;
    }

    public function getShields()
    {
        return $this->shields;
    }

    public function setShields(int $shields)
    {
        $this->shields = $shields;
    }

    public function getPotions()
    {
        return $this->potions;
    }

    public function setPotions(int $potions)
    {
        $this->potions = $potions;
    }

    public function getMaxHealth()
    {
        return $this->maxHealth;
    }

    public function getName(): string
    {
        $reflect = new ReflectionClass($this);
        return $reflect->getShortName();
    }

    abstract public function hasMegaEvolve(): bool;
}
