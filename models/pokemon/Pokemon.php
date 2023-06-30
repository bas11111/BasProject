<?php

namespace models\pokemon;

use Console;
use models\moves\Move;
use models\moves\Struggle;
use ReflectionClass;

abstract class Pokemon
{
    //properties
    protected array $type;
    protected int $health;
    protected int $level;
    protected ?int $maxHealth = null;
    protected ?int $CP = null;
    protected int $shields;
    protected int $potions;
    protected string $about;

    protected int $entry;

    /** @var Move[] */
    protected array $moves = [];
    //welke types debuffed worden bij welke environment
    protected static array $environmentDebuffedTypes = [
        "water" => ["fire", "ground"],
        "mountains" => ["ground"],
        "ground" => ["fly"],
        "sky" => ["ground"],
        "caves" => ["ice", "fairy"],
    ];

    //de construct, initializeer een object zijn properties bij creatie.
    public function __construct(int $level, ?array $moves = null)
    {
        $this->level = $level;
        $this->getCombatPower();
        $maxHealth = $this->getMaxHealth();
        $this->health = $maxHealth;
        $this->about = 'this is a pokemon';
        $this->entry = 1;
        $availableMoves = $this->getAvailableMovesAtLevel($this->level);
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
            if (!($move instanceof Move)) {
                try {
                    $move = $this->getMove($move);
                } catch (\Exception $exception) {
                    Console::error($exception->getMessage());
                    continue;
                }
            }
            if ($this->isMoveAvailableAtLevel($this->level, $move)) {
                $this->moves[] = $move;
            }
        }
    }

    //haalt een move uit de mogelijke moves, en returned die
    public function getMove(string $move): Move
    {
        if (!str_contains($move, '\\')) {
            $move = 'models\\moves\\'.$move;
        }
        if (!class_exists($move)){
            throw new \Exception("Move: {$move} does not exist in the first place! Make sure the spelling is correct!");
        }
        $_move = new $move();


        if (!in_array($_move::class, $this->getAvailableMoves()) && !in_array($_move->getName(), $this->getAvailableMoves())) {
            throw new \Exception("Invalid move: {$_move->getName()} for Pokemon: {$this->getName()}");
        }
        return $_move;
    }

    //checkt of desbetreffende move toegestaan is op het level van de pokemon
    private function isMoveAvailableAtLevel(int $level, Move $move): bool
    {
        $index = array_search($move->getName(), $this->getAvailableMoves());
        if($index === false) {
            $index = array_search($move::class, $this->getAvailableMoves());
        }

        return $index !== false && $index <= $level;
    }

    //kijkt welke move het meeste damage doet tegen de huidige tegenstander
    public function getBestMove(Pokemon $opponent, string $weather): Move
    {
        $highestDamage = -INF;
        $bestMove = null;

        $canUseChargedAttack = rand(1, 10) === 10;
        foreach ($this->moves as $move) {
            if (!$canUseChargedAttack && $move->isCharged()) {
                continue;
            }
            $damage = $move->calculateDamage($this, $opponent, $weather);
            if ($damage > $highestDamage) {
                $highestDamage = $damage;
                $bestMove = $move;
            }
        }

        return $bestMove ?? new Struggle();
    }
    //check of een pokemon debuffed is door de environment van het gevecht
    public function isDeBuffed(string $environment): bool
    {
        return array_key_exists($environment, static::$environmentDebuffedTypes)
            && in_array($this->type, static::$environmentDebuffedTypes[$environment]);
    }

    //haal type pokemon op
    public function getType(): array
    {
        return $this->type;
    }
    //haal hp pokemon op
    public function getHealth(): int
    {
        return $this->health;
    }
    //stel hp in voor pokemon
    public function setHealth(int $health): void
    {
        $this->health = $health;
    }
    //haal about pokemon op
    public function getAbout(): string
    {
        return $this->about;
    }
    //haal entry pokemon op
    public function getEntry(): int
    {
        return $this->entry;
    }
    //haal combatpower pokemon op
    public function getCombatPower(): int
    {
        if ($this->CP === null) {
            $level = $this->getLevel();
            $cp = $level * 35;

            $this->CP = $cp;
        }

        return $this->CP;
    }
    //stel combatpower pokémon in
    public function setCombatPower(int $CP): void
    {
        $this->CP = $CP;
    }
    //haal level van pokémon op
    public function getLevel(): int
    {
        return $this->level;
    }
    //stel level pokémon in
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }
    //haal aantal schilden wat pokémon heeft op
    public function getShields(): int
    {
        return $this->shields;
    }
    //stel aantal schilden pokémon in
    public function setShields(int $shields): void
    {
        $this->shields = $shields;
    }
    //haal het maximale hp van een pokémon op
    public function getMaxHealth(): int
    {
        if ($this->maxHealth === null) {
            $level = $this->getLevel();
            $maxHealth = 100 + $level * 4;

            $this->maxHealth = $maxHealth;
        }

        return $this->maxHealth;
    }
    //haal naam van de pokémon op
    public function getName(): string
    {
        $reflect = new ReflectionClass($this);

        return $reflect->getShortName();
    }
    //in elke pokémon file staat of de pokémon een mega evolve heeft of niet
    abstract public function hasMegaEvolve(): bool;
    //in elke pokémon file staat welke moves hij beschikbaar heeft.
    abstract public function getAvailableMoves(): array;

    /**
     * @param  int|null  $level
     *
     * @return Move[]
     */
    public function getAvailableMovesAtLevel(int $level = null): array
    {
        $level = $level ?? $this->level;
        //haalt alle moves uit moves-set
        $allMoves = $this->getAvailableMoves();
        //sorteert moves laag naar hoog
        ksort($allMoves);
        $moves = [];
        foreach ($allMoves as $move) {
            //check of de pokemon dat level mag gebruiken op huidig level, zo ja, gooi hem in $moves array
            $move = $this->getMove($move);
            if ($this->isMoveAvailableAtLevel($level, $move)) {
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
