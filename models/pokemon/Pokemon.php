<?php

namespace models\pokemon;

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
    protected string $about;

    protected array $moves = [];

    protected static array $environmentDebuffedTypes = [
        "water" => ["fire", "ground"],
        "mountains" => ["ground"],
        "ground" => ["fly"],
        "sky" => ["ground"],
        "caves" => ["ice", "fairy"],
    ];


    public function __construct(int $level, int $CP, int $health, int $maxHealth, array $moves = [], string $about)
    {
        $this->level = $level;
        $this->CP = $CP;
        $this->health = $health;
        $this->maxHealth = $maxHealth;
        foreach ($moves as $move) {
            if (($_move = $this->getMove($move)) !== null) {
                $this->moves[] = $_move;
            }
        }
        $this->about = $about;
    }

    public function getMove(string $move): ?Move
    {
        if (in_array($move, $this->getAvailableMoves())) {
            $class = 'models\\moves\\'.$move;

            return new $class();
        }

        return null;
    }


    public function getBestMove(Pokemon $opponent, string $weather)
    {
        $highestDamage = 0;
        $bestMove = null;
        /** @var Move $move */
        if (rand(1, 10) === 10) {
            foreach ($this->moves as $move) {
                $damage = $move->calculateDamage($this, $opponent, $weather);
                if ($highestDamage < $damage) {
                    $highestDamage = $damage;
                    $bestMove = $move;
                }
            }
        } else {
            foreach ($this->moves as $move) {
                if (!$move->isCharged()) {
                    $damage = $move->calculateDamage($this, $opponent, $weather);
                    if ($highestDamage < $damage) {
                        $highestDamage = $damage;
                        $bestMove = $move;
                    }
                }
            }
        }

        return $bestMove;
    }

    public function isDeBuffed(string $environment): bool
    {
        return array_key_exists($environment, static::$environmentDebuffedTypes)
            && in_array($this->type, static::$environmentDebuffedTypes[$environment]);
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

    public function getAbout()
    {
        return $this->about;
    }

    public function setAbout($about)
    {
        $this->about = $about;
    }

    public function getCombatPower()
    {
        return $this->CP;
    }

    public function setCombatPower(int $CP)
    {
        $this->CP = $CP;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel(int $level)
    {
        $this->level = $level;
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

    abstract public function getAvailableMoves(): array;
}
