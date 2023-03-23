<?php

namespace models\moves;

abstract class Move
{
    protected string $type;

    protected static array $weatherBoostedTypes = [
        "sunny" => ["ground", "fire", "grass"],
        "rainy" => ["water", "electric", "bug"],
        "windy" => ["dragon", "fly", "psychic"],
        "snowy" => ["ice", "steel"],
        "foggy" => ["ghost", "dark"],
        "cloudy" => ["fairy", "fighting", "poison"],
        "partly cloudy" => ["normal", "rock"],
    ];

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

    abstract function getEffectiveAgainst(): array;

    public function isNotEffectiveAgainst(array $types)
    {
        foreach ($types as $type) {
            if (in_array($type, $this->getNotEffectiveAgainst())) {
                return true;
            }
        }

        return false;
    }

    public function isBoosted(string $weather): bool
    {
        return array_key_exists($weather, static::$weatherBoostedTypes) && in_array($this->type, static::$weatherBoostedTypes[$weather]);
    }

    abstract function getNotEffectiveAgainst(): array;

    abstract public function getDamage(): int;
}