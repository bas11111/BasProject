<?php

namespace models\pokemon;

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

    protected static array $environmentDebuffedTypes = [
        "water" => ["fire", "ground"],
        "mountains" => ["ground"],
        "ground" => ["fly"],
        "sky" => ["ground"],
        "caves" => ["ice", "fairy"]
    ];

    public function isDeBuffed(string $environment): bool
    {
        return array_key_exists($environment, static::$environmentDebuffedTypes) && in_array($this->type, static::$environmentDebuffedTypes[$environment]);
    }


    public function __construct(int $level, int $CP, int $health, int $maxHealth)
    {
        $this->level = $level;
        $this->CP = $CP;
        $this->health = $health;
        $this->maxHealth = $maxHealth;
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

    abstract public function getMoves(): array;

    abstract public function hasMegaEvolve(): bool;
}
