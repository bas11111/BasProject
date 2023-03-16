<?php


abstract class Pokemon
{
    protected array $type;
    protected int $health;
    protected int $maxHealth;

    public function getName(): string
    {
        return get_class($this);
    }

    public function getType(): array
    {
        return $this->type;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getMaxHealth()
    {
        return $this->maxHealth;
    }

    public function setHealth(int $health)
    {
        $this->health = $health;
    }

    public function isWeakAgainst(array $types)
    {
        foreach ($types as $type) {
            if (in_array($type, $this->getWeakAgainst())) {
                return true;
            }
        }

        return false;
    }

    public function getheal(Pokemon $pokemon)
    {
        $pokemon->setHealth(min($pokemon->getHealth() + 10, $pokemon->getMaxHealth()));
        echo($pokemon->getName()." has an artifact equipped, regenerated 10 HP . ".$pokemon->getName()." now has "
            .$pokemon->getHealth()." HP.");
        echo("-------");
    }

    abstract public function getMoves(): array;

    abstract public function getWeakAgainst(): array;

    abstract public function getCombatPower(): int;

    abstract public function getChargedAttack(): int;
}
