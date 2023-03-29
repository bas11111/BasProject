<?php

namespace models\pokemon;

abstract class Pokemon
{
    protected array $type;
    protected int $health;
    protected int $maxHealth;
    protected int $CP;
    protected int $shields;

    public function getType(): array
    {
        return $this->type;
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

    abstract public function getWeakAgainst(): array;

    public function getheal(Pokemon $pokemon)
    {
        $pokemon->setHealth(min($pokemon->getHealth() + 10, $pokemon->getMaxHealth()));
        echo($pokemon->getName()." has an artifact equipped, regenerated 10 HP . ".$pokemon->getName()." now has "
            .$pokemon->getHealth()." HP.");
        echo("-------");
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

    public function getMaxHealth()
    {
        return $this->maxHealth;
    }

    public function getName(): string
    {
        return get_class($this);
    }

    abstract public function getMoves(): array;

    abstract public function hasMegaEvolve(): bool;
}
