<?php

namespace models\pokemon;

use models\moves\Move;
use ReflectionClass;

abstract class Pokemon
{
    protected array $type;
    protected int $health;
    protected int $level;
    protected ?int $maxHealth = null;
    protected ?int $CP = null;
    protected int $shields;
    protected int $potions;
    protected static string $about;

    protected static int $entry;

    protected array $moves = [];

    protected static array $environmentDebuffedTypes = [
        "water" => ["fire", "ground"],
        "mountains" => ["ground"],
        "ground" => ["fly"],
        "sky" => ["ground"],
        "caves" => ["ice", "fairy"],
    ];


    public function __construct(int $level, ?array $moves = null)
    {
        $this->level = $level;
        $this->getCombatPower();
        $maxHealth = $this->getMaxHealth();
        $this->health = $maxHealth;
        static::$about = 'this is a pokemon';
        static::$entry = 1;
        $availableMoves = static::getAvailableMovesAtLevel($this->level);
        if ($moves === null) {
            $moves = $availableMoves;
        } elseif (count($availableMoves) > count($moves)) {
            $availableMoveIndex = count($availableMoves) - 1;
            $moveIndex = count($moves);
            while (count($availableMoves) > count($moves)) {
                $moves[$moveIndex] = $availableMoves[$availableMoveIndex];
                $moveIndex = count($moves);
                $availableMoveIndex--;
            }
        }
        foreach ($moves as $move) {
            if (($_move = $this->getMove($move)) !== null && static::isMoveAvailableAtLevel($this->level, $move)) {
                $this->moves[] = $_move;
            }
        }
    }

    public function getMove(string $move): ?Move
    {
        if (in_array($move, static::getAvailableMoves())) {
            $class = 'models\\moves\\'.$move;

            return new $class();
        }

        return null;
    }

    private static function isMoveAvailableAtLevel(int $level, mixed $move): bool
    {
        $index = array_search($move, static::getAvailableMoves());

        return $index !== false && $index <= $level;
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

    public function getMoves(): array
    {
        return $this->moves;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth(int $health)
    {
        $this->health = $health;
    }

    public static function getAbout()
    {
        return self::$about;
    }

    public static function setAbout($about)
    {
        self::$about = $about;
    }

    public function getEntry()
    {
        return self::$entry;
    }

    public function setEntry($entry)
    {
        self::$entry = $entry;
    }

    public function getCombatPower()
    {
        if ($this->CP === null) {
            $level = $this->getLevel();
            $cp = $level * 35;

            $this->CP = $cp;
        }

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
        if ($this->maxHealth === null) {
            $level = $this->getLevel();
            $maxHealth = 100 + $level * 4;

            $this->maxHealth = $maxHealth;
        }

        return $this->maxHealth;
    }

    public function getName(): string
    {
        $reflect = new ReflectionClass($this);

        return $reflect->getShortName();
    }

    abstract public function hasMegaEvolve(): bool;

    abstract public static function getAvailableMoves(): array;

    public static function getAvailableMovesAtLevel(int $level): array
    {
        //haalt alle moves uit moves-set
        $allMoves = static::getAvailableMoves();
        //sorteert moves laag naar hoog
        ksort($allMoves);
        $moves = [];
        foreach ($allMoves as $move) {
            //check of de pokemon dat level mag gebruiken op huidig level, zo ja, gooi hem in $moves array
            if (static::isMoveAvailableAtLevel($level, $move)) {
                $moves[] = $move;
            }
        }
        //telt het aantal moves in $moves array
        $count = count($moves);
        //als het aantal moves lager of gelijk is aan 4, return de array
        if ($count <= 4) {
            return $moves;
        }
        $results = [];
        $lastIndex = $count - 1;
        $firstIndex = $lastIndex - 3;
        while ($firstIndex <= $lastIndex) {
            $results[] = $moves[$firstIndex];
            $firstIndex++;
        }
        return $results;
        //TODO Find 4 moves from my available list. Either the last 4, or 4 random ones

    }
}
