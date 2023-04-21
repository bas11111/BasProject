<?php

namespace models\moves;

use Console;
use models\pokemon\Pokemon;
use ReflectionClass;

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
        $reflect = new ReflectionClass($this);

        return $reflect->getShortName();
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

    public
    function calculateDamage(
        Pokemon $attacker,
        Pokemon $target,
        string $weather
    ) {
        if ($this->isEffectiveAgainst($target->getType())) {
            if ($this->isCharged()) {
                $damage = $this->getDamage() + rand(30, 40);
            } else {
                $damage = $this->getDamage() + rand(10, 20);
            }
        } elseif ($this->isNotEffectiveAgainst($target->getType())) {
            if ($this->isCharged()) {
                $damage = $this->getDamage() - rand(30, 40);
            } else {
                $damage = $this->getDamage() - rand(5, 10);
            }
            if ($damage < 1) {
                $damage = 1;
            }
        } else {
            $damage = $this->getDamage();
        }
        if ($this->isBoosted($weather)) {
            $damage += 10;
        }

        $CP = round($attacker->getCombatPower() / 200);
        $damage += $CP;

        return $damage;
    }

    public function isBoosted(string $weather): bool
    {
        return array_key_exists($weather, static::$weatherBoostedTypes) && in_array($this->type, static::$weatherBoostedTypes[$weather]);
    }

    abstract function getNotEffectiveAgainst(): array;

    abstract public function getDamage(): int;
}