<?php

namespace pokemon\PokemonMove;

abstract class PokemonMove
{
    protected string $type;

    protected bool $charged;

    public function getType(): string
    {
        return $this->type;
    }

    public function getName(): string
    {
        return get_class($this);
    }

    public function isCharged(): bool
    {
        return $this->charged;
    }

    public function isEffectiveAgainst(array $types)
    {
        foreach ($types as $type) {
            if (in_array($type, $this->getEffectiveAgainst())) {
                return true;
            }
        }

        return false;
    }

    public function isNotEffectiveAgainst(array $types)
    {
        foreach ($types as $type) {
            if (in_array($type, $this->getNotEffectiveAgainst())) {
                return true;
            }
        }

        return false;
    }

    abstract function getEffectiveAgainst(): array;

    abstract function getNotEffectiveAgainst(): array;

    abstract public function getDamage(): int;
}