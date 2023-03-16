<?php

namespace pokemon;

require 'PokemonMove/PokemonMove.php';
require 'PokemonMove/Avalanche.php';
require 'PokemonMove/IceKick.php';
require 'PokemonMove/FireBreath.php';
require 'PokemonMove/FlameBlast.php';
require 'PokemonMove/DracoMeteor.php';
require 'PokemonMove/DragonBreath.php';
require 'PokemonMove/MudSlap.php';
require 'PokemonMove/Earthquake.php';
require 'PokemonMove/Snarl.php';
require 'PokemonMove/DarkPulse.php';
require 'PokemonMove/Charm.php';
require 'PokemonMove/DazzlingDream.php';
require 'PokemonMove/Counter.php';
require 'PokemonMove/FocusBlast.php';
require 'PokemonMove/Hex.php';
require 'PokemonMove/Poltergeist.php';
require 'PokemonMove/Cut.php';
require 'PokemonMove/HornAttack.php';
require 'PokemonMove/WaterGun.php';
require 'PokemonMove/HydroPump.php';
require 'PokemonMove/LegendaryBurst.php';
require 'PokemonMove/LegendarySmash.php';
require 'PokemonMove/RockThrow.php';
require 'PokemonMove/StoneEdge.php';
require 'PokemonMove/Acid.php';
require 'PokemonMove/SludgeWave.php';
require 'PokemonMove/AirSlash.php';
require 'PokemonMove/Hurricane.php';
require 'PokemonMove/BulletPunch.php';
require 'PokemonMove/HeavySlam.php';
require 'PokemonMove/BulletSeed.php';
require 'PokemonMove/SolarBeam.php';
require 'PokemonMove/Spark.php';
require 'PokemonMove/ThunderBolt.php';
require 'PokemonMove/Confusion.php';
require 'PokemonMove/FutureSight.php';

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
