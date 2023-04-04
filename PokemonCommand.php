<?php

use models\moves\Move;
use models\pokemon\Abomasnow;
use models\pokemon\Alakazam;
use models\pokemon\Arceus;
use models\pokemon\Articuno;
use models\pokemon\Buzzwole;
use models\pokemon\Charizard;
use models\pokemon\Darkrai;
use models\pokemon\Dragonite;
use models\pokemon\Entei;
use models\pokemon\Garchomp;
use models\pokemon\Gardevoir;
use models\pokemon\Gengar;
use models\pokemon\Gigalith;
use models\pokemon\Glastrier;
use models\pokemon\Groudon;
use models\pokemon\Gyarados;
use models\pokemon\Hydreigon;
use models\pokemon\Lucario;
use models\pokemon\Machamp;
use models\pokemon\Meganium;
use models\pokemon\Metagross;
use models\pokemon\Mewtwo;
use models\pokemon\Pinsir;
use models\pokemon\Pokemon;
use models\pokemon\Raikou;
use models\pokemon\Rhyperior;
use models\pokemon\Silvally;
use models\pokemon\Snorlax;
use models\pokemon\Spectrier;
use models\pokemon\Suicune;
use models\pokemon\Tornadus;
use models\pokemon\Tyranitar;
use models\pokemon\Venusaur;
use models\pokemon\Xerneas;
use models\pokemon\Yveltal;
use models\pokemon\Zapdos;

class PokemonCommand
{
    private string $weather;

    public function actionIndex()
    {
        $pokemons = [
            new Charizard(), //0
            new Snorlax(), //1
            new Gyarados(), //2
            new Rhyperior(), //3
            new Yveltal(), //4
            new Mewtwo(), //5
            new Hydreigon(), //6
            new Dragonite(), //7
            new Venusaur(), //8
            new Lucario(), //9
            new Articuno(), //10
            new Zapdos(), //11
            new Entei(), //12
            new Garchomp(), //13
            new Abomasnow(), //14
            new Machamp(), //15
            new Meganium(), //16
            new Metagross(), //17
            new Raikou(), //18
            new Suicune(), //19
            new Tyranitar(), //20
            new Gardevoir(), //21
            new Buzzwole(), //22
            new Gengar(), //23
            new Alakazam(), //24
            new Arceus(), //25
            new Darkrai(), //26
            new Gigalith(), //27
            new Glastrier(), //28
            new Groudon(), //29
            new Pinsir(), //30
            new Silvally(), //31
            new Spectrier(), //32
            new Tornadus(), //33
            new Xerneas(), //34
        ];
//        $this->raid($pokemons[5], clone $pokemons[9], clone $pokemons[9], clone $pokemons[9], clone $pokemons[9], clone $pokemons[9],
//            clone $pokemons[9], clone $pokemons[9], clone $pokemons[9], clone $pokemons[9]);
//        $this->raid($pokemons[array_rand($pokemons)], clone $pokemons[array_rand($pokemons)], clone $pokemons[array_rand($pokemons)],
//            clone $pokemons[array_rand($pokemons)], clone $pokemons[array_rand($pokemons)], clone $pokemons[array_rand($pokemons)],
//            clone $pokemons[array_rand($pokemons)], clone $pokemons[array_rand($pokemons)]);
//        $this->battle($pokemons[array_rand($pokemons)], clone $pokemons[array_rand($pokemons)]);
//        $this->teamBattle([$pokemons[5]], [$pokemons[9], $pokemons[15]]);
        try {
            $path = 'test.csv';
            $handle = fopen($path, "r");
            $headers = fgetcsv($handle, 0, ";");
            foreach ($headers as $index => $value) {
                $value = trim($value);
                $value = str_replace('﻿', '', $value);
                $headers[$index] = $value;
            }
            $headers = array_flip($headers);
            $teams = [];
            while (($row = fgetcsv($handle, 1000, ";")) !== false) {
                $team = [];
                for ($i = 1; $i <= 6; $i++) {
                    $class = 'models\pokemon\\' . $row[$headers['Pokemon ' . $i]];
                    $team[] = new $class();
                }
                $teams[$row[$headers["Trainer naam"]]] = $team;
            }
            fclose($handle);
            $trainer1 = 'Bas';
            $trainer2 = 'Melvin';
            $this->teamBattle($teams[$trainer1], $trainer1, $teams[$trainer2], $trainer2);
        } catch (Exception $e) {
            Console::error("Error-----");
        }

    }


    private function calculateDamage(Move $move, Pokemon $attacker, Pokemon $target)
    {
        Console::info($move->getName() . " was used!");
        if ($move->isEffectiveAgainst($target->getType())) {
            Console::succes("It was very effective!");
            if ($move->isCharged()) {
                $damage = $move->getDamage() + rand(30, 40);
            } else {
                $damage = $move->getDamage() + rand(10, 20);
            }
        } elseif ($move->isNotEffectiveAgainst($target->getType())) {
            Console::error("It wasn't very effective...");
            if ($move->isCharged()) {
                $damage = $move->getDamage() - rand(30, 40);
            } else {
                $damage = $move->getDamage() - rand(5, 10);
            }
            if ($damage < 1) {
                $damage = 1;
            }
        } else {
            $damage = $move->getDamage();
        }

        if ($move->isBoosted($this->weather)) {
            $damage += 10;
        }
        $CP = round($attacker->getCombatPower() / 200);
        $damage += $CP;


        $targetShields = $target->getShields();
        if ($move->isCharged()) {
            if ($target->getShields() > 0) {
                if (rand(1, 1) === 1) {
                    Console::succes($target->getName() . " has used a shield to block the incoming attack");
                    $damage = 0;
                    $target->setShields($targetShields - 1);
                    Console::info($target->getName() . " now has " . $target->getShields() . " shield left!");
                }
            }
        }

        return $damage;
    }

    private function setHP(Move $move, Pokemon $attacker, Pokemon $target)
    {
        $targetHealth = $target->getHealth();
        $targetHealth -= $this->calculateDamage($move, $attacker, $target);
        Console::info($target->getName() . " now has " . $targetHealth . " HP left!");
        Console::info("-------------------------------");
        $target->setHealth($targetHealth);
    }

    private function setRaidHP(Move $move, Pokemon $attacker, Pokemon $target)
    {
        $targetHealth = $target->getHealth();
        $targetHealth -= $this->calculateDamage($move, $attacker, $target);
        Console::info($target->getName() . spl_object_id($target) . " now has " . $targetHealth . " HP left!");
        Console::info("---------------------------------");
        $target->setHealth($targetHealth);
        if ($targetHealth <= 0) {
            Console::error($target->getName() . spl_object_id($target) . " has fallen!");
            Console::info("---------------------------------");
        }
    }

    private function getAlive($pokemon)
    {
        if ($pokemon->getHealth() > 0) {
            Console::succes($pokemon->getName() . spl_object_id($pokemon) . " has survived this battle with " . $pokemon->getHealth() . " left!");
        }
    }

    private function usePotion($pokemon)
    {
        if (rand(1, 10) === 10) {
            $pokemon->setHealth(min($pokemon->getHealth() + 100, $pokemon->getMaxHealth()));
            Console::info("The trainer has used a potion to heal 100 health back to " . $pokemon->getName() . spl_object_id($pokemon));
            Console::info("-------------------------------");
        } else {
            $pokemon->setHealth(min($pokemon->getHealth() + 50, $pokemon->getMaxHealth()));
            Console::info("The trainer has used a potion to heal 50 health back to " . $pokemon->getName() . spl_object_id($pokemon));
            Console::info("-------------------------------");
        }
    }

    private function setWeather()
    {
        $this->weather = "";
        $dice = rand(1, 7);
        if ($dice === 1) {
            Console::info("The weather is sunny! Grass, ground and fire type attacks are now boosted!");
            Console::info("-------------------------------");
            $this->weather = "sunny";
        }
        if ($dice === 2) {
            Console::info("The weather is rainy! Water, electric and bug type attacks are now boosted!");
            Console::info("-------------------------------");
            $this->weather = "rainy";
        }
        if ($dice === 3) {
            Console::info("The weather is windy! Dragon, flying and psychic type attacks are now boosted!");
            Console::info("-------------------------------");
            $this->weather = "windy";
        }
        if ($dice === 4) {
            Console::info("The weather is snowy! Ice and steel type attacks are now boosted!");
            Console::info("-------------------------------");
            $this->weather = "snowy";
        }
        if ($dice === 5) {
            Console::info("The weather is foggy! Ghost and dark type attacks are now boosted!");
            Console::info("-------------------------------");
            $this->weather = "foggy";
        }
        if ($dice === 6) {
            Console::info("The weather is cloudy! Fairy, fighting and poison type attacks are now boosted!");
            Console::info("-------------------------------");
            $this->weather = "cloudy";
        }
        if ($dice === 7) {
            Console::info("The weather is partly cloudy! Normal and rock type attacks are now boosted!");
            Console::info("-------------------------------");
            $this->weather = "partly cloudy";
        }
    }

    private function setMega(Pokemon $pokemon)
    {
        $calc = round($pokemon->getCombatPower() / 2);
        if ($pokemon->hasMegaEvolve()) {
            if (rand(1, 10) === 1) {
                Console::info($pokemon->getName() . spl_object_id($pokemon) . " Has mega evolved");
                $pokemon->setCombatPower($pokemon->getCombatPower() + $calc);
            }
        }
    }

    private function battle(Pokemon $pokemon1, Pokemon $pokemon2, bool $recursive = true, bool $startofbattle = true)
    {
        if ($startofbattle) {
            $this->setWeather();
            $this->setMega($pokemon1);
            $this->setMega($pokemon2);
        }
        $moves1 = $pokemon1->getMoves();
        $moves2 = $pokemon2->getMoves();
        if ($pokemon1->getHealth() > 0) {
            if ($pokemon1->getHealth() < 150) {
                if (rand(1, 3) === 3) {
                    $this->usePotion($pokemon1);
                } else {
                    Console::info($pokemon1->getName() . " attacks!");
                    Console::info("-------------------------------");
                    $this->setHP($moves1[array_rand($moves1)], $pokemon1, $pokemon2);
                }
            } else {
                Console::info($pokemon1->getName() . " attacks!");
                Console::info("-------------------------------");
                $this->setHP($moves1[array_rand($moves1)], $pokemon1, $pokemon2);
            }
        }
        if ($pokemon2->getHealth() > 0) {
            if ($pokemon2->getHealth() < 150) {
                if (rand(1, 3) === 3) {
                    $this->usePotion($pokemon2);
                } else {
                    Console::info($pokemon2->getName() . " attacks!");
                    Console::info("-------------------------------");
                    $this->setHP($moves2[array_rand($moves2)], $pokemon2, $pokemon1);
                }
            } else {
                Console::info($pokemon2->getName() . " attacks!");
                Console::info("-------------------------------");
                $this->setHP($moves2[array_rand($moves2)], $pokemon2, $pokemon1);
            }
        }
        if ($pokemon1->getHealth() > 0 && $pokemon2->getHealth() > 0) {
            if ($recursive) {
                $this->battle($pokemon1, $pokemon2, $recursive, false);
            }
        } else {
            if ($pokemon2->getHealth() <= 0) { // Pokemon1 wins
                Console::succes($pokemon1->getName() . spl_object_id($pokemon1) . " wins this battle with " . $pokemon1->getHealth()
                    . " HP left!");
                Console::error($pokemon2->getName() . spl_object_id($pokemon2) . " has been defeated.");
            } else { // Pokemon2 wins
                Console::succes($pokemon2->getName() . spl_object_id($pokemon2) . " wins this battle with " . $pokemon2->getHealth()
                    . " HP left!");
                Console::error($pokemon1->getName() . spl_object_id($pokemon1) . " has been defeated.");
            }
        }
    }

    private function raid(
        Pokemon $boss,
        Pokemon $pokemon1,
        Pokemon $pokemon2,
        Pokemon $pokemon3,
        Pokemon $pokemon4,
        Pokemon $pokemon5,
        Pokemon $pokemon6,
        Pokemon $pokemon7,
        bool    $startOfBattle = true
    )
    {
        $array = [$pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6, $pokemon7];
        if ($startOfBattle) {
            $boss->setHealth(4500);
            $boss->setShields(0);
            foreach ($array as $pokemon) {
                $this->setMega($pokemon);
            }
            $this->setWeather();
        }
        foreach ($array as $pokemon) {
            $moves = $pokemon->getmoves();
            if ($pokemon->getHealth() > 0) {
                if ($pokemon->getHealth() < 150) {
                    if (rand(1, 3) === 3) {
                        $this->usePotion($pokemon);
                    } else {
                        Console::info($pokemon->getName() . spl_object_id($pokemon) . " attacks!");
                        $this->setRaidHP($moves[array_rand($moves)], $pokemon, $boss);
                    }
                } else {
                    Console::info($pokemon->getName() . spl_object_id($pokemon) . " attacks!");
                    $this->setRaidHP($moves[array_rand($moves)], $pokemon, $boss);
                }
            }
        }
        if ($boss->gethealth() <= 0) {
            Console::succes($boss->getName() . spl_object_id($boss) . " has been defeated, the attackers have won this raid!");
            Console::info("---------------------------------");
            foreach ($array as $pokemon) {
                $this->getAlive($pokemon);
            }
            die;
        }
        foreach ($array as $pokemon) {
            $bossmoves = $boss->getMoves();
            if ($pokemon->getHealth() > 0) {
                Console::info($boss->getName() . spl_object_id($boss) . " attacks!");
                $this->setRaidHP($bossmoves[array_rand($bossmoves)], $pokemon, $pokemon);
            }
        }
        if ($pokemon1->getHealth() <= 0 && $pokemon2->getHealth() <= 0 && $pokemon3->getHealth() <= 0 && $pokemon4->getHealth() <= 0
            && $pokemon5->getHealth() <= 0
            && $pokemon6->getHealth() <= 0
        ) {
            Console::error("All of your pokemon have fallen, " . $boss->getName() . " has won this raid with " . $boss->gethealth() . "HP left!");
            die;
        }
        $this->raid($boss, $pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6, $pokemon7, false);
    }

    private function teamBattle(array $team1, string $trainer1, array $team2, string $trainer2, bool $startofbattle = true)
    {
        $pokemon1 = $team1[0];
        $pokemon2 = $team2[0];
        if (!$pokemon1 instanceof Pokemon) {
            Console::error("error");
            die;
        }

        if ($startofbattle) {
            $this->setWeather();
            $this->setMega($pokemon1);
            $this->setMega($pokemon2);
        }
        $this->battle($pokemon1, $pokemon2, false, false);

        if ($pokemon1->getHealth() <= 0) {
            unset($team1[0]);
            $team1 = array_values($team1);
            if (!empty($team1)) {
                Console::info($trainer1 . " sends out " . $team1[0]->getName());
            }
        }
        if ($pokemon2->getHealth() <= 0) {
            unset($team2[0]);
            $team2 = array_values($team2);
            if (!empty($team2)) {
                Console::info($trainer2 . " sends out " . $team2[0]->getName());
            }
        }
        if (empty($team1)) {
            Console::succes($trainer2 . " wins");
        } elseif (empty($team2)) {
            Console::succes($trainer1 . " wins");
        } else {
            $this->teamBattle($team1, $trainer1, $team2, $trainer2, false);
        }
    }
}
