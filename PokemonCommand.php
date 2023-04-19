<?php

use models\moves\Move;
use models\pokemon\Pokemon;

class PokemonCommand
{
    private string $weather;
    private string $environment;

    public function actionIndex()
    {
        //dit is een test
        $path = 'test1.csv';
        $handle = fopen($path, "r");
        $headers = fgetcsv($handle, 0, ";");
        foreach ($headers as $index => $value) {
            $value = trim($value);
            $value = str_replace('﻿', '', $value);
            $headers[$index] = $value;
        }
        $headers = array_flip($headers);
        $teams = [];
        try {
            while (($row = fgetcsv($handle, 1000, ";")) !== false) {
                $trainer = $row[$headers["Trainer"]];
                $level = $row[$headers["Level"]];
                $calc = round($level / 12);
                $maxHealth = $row[$headers["maxHealth"]] * $calc;
                $health = $maxHealth;
                $CP = $row[$headers["CP"]] * $calc;
                if (!isset($teams[$trainer])) {
                    $teams[$trainer] = [];
                }
                $pokemon = $row[$headers['Pokemon']] ?? null;
                if (empty($pokemon)) {
                    Console::error("error: empty pokemon");
                    continue;
                }
                $class = 'models\pokemon\\'.$pokemon;
                if ($level > 100) {
                    throw new Exception($class." has a level higher than 100, this is not allowed");
                }
                if (!class_exists($class)) {
                    throw new Exception("File not found: ".$class);
                }
                $teams[$trainer][] = new $class($level, $CP, $health, $maxHealth);
            }
        } catch (Exception $e) {
            Console::error("Error: ".$e->getMessage());
            die;
        }


        fclose($handle);
        $trainer1 = 'Bas';
        $trainer2 = 'Gerlof';
        if (!isset($teams[$trainer1]) || !isset($teams[$trainer2])) {
            Console::error('Error: One of the selected trainers does not have a team');
            die;
        }
        $this->teamBattle($teams[$trainer1], $trainer1, $teams[$trainer2], $trainer2);
//        $this->battle($teams["Arjen"][5], $teams["Gerlof"][4]);
//        $this->raid(clone($teams["Bas"][5]), $teams["Bas"][0], $teams["Bas"][1], $teams["Bas"][2], $teams["Bas"][3], $teams["Bas"][4], $teams["Bas"][5]);
    }

    private
    function calculateDamage(
        Move $move,
        Pokemon $attacker,
        Pokemon $target
    ) {
        Console::info($move->getName()." was used!");
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
                if (rand(1, 2) === 1) {
                    Console::succes($target->getName()." has used a shield to block the incoming attack");
                    $damage = 0;
                    $target->setShields($targetShields - 1);
                    Console::info($target->getName().spl_object_id($target)." now has ".$target->getShields()." shield left!");
                }
            }
        }
        if ($damage > 0) {
            Console::info("The attack did " . $damage . " damage");
        }
        return $damage;
    }

    private
    function setHP(
        Move $move,
        Pokemon $attacker,
        Pokemon $target
    ) {
        $targetHealth = $target->getHealth();
        $targetHealth -= $this->calculateDamage($move, $attacker, $target);
        Console::info($target->getName().spl_object_id($target)." now has ".$targetHealth." HP left!");
        Console::info("-------------------------------");
        $target->setHealth($targetHealth);
    }

    private
    function setRaidHP(
        Move $move,
        Pokemon $attacker,
        Pokemon $target
    ) {
        $targetHealth = $target->getHealth();
        $targetHealth -= $this->calculateDamage($move, $attacker, $target);
        Console::info($target->getName().spl_object_id($target)." now has ".$targetHealth." HP left!");
        Console::info("---------------------------------");
        $target->setHealth($targetHealth);
        if ($targetHealth <= 0) {
            Console::error($target->getName().spl_object_id($target)." has fallen!");
            Console::info("---------------------------------");
        }
    }

    private
    function getAlive(
        $pokemon
    ) {
        if ($pokemon->getHealth() > 0) {
            Console::succes($pokemon->getName().spl_object_id($pokemon)." has survived this battle with ".$pokemon->getHealth()." left!");
        }
    }

    private
    function usePotion(
        $pokemon
    ) {
        if (rand(1, 10) === 10) {
            $pokemon->setHealth(min($pokemon->getHealth() + 100, $pokemon->getMaxHealth()));
            Console::info("The trainer has used a potion to heal 100 health back to ".$pokemon->getName().spl_object_id($pokemon));
            Console::info("-------------------------------");
        } else {
            $pokemon->setHealth(min($pokemon->getHealth() + 50, $pokemon->getMaxHealth()));
            Console::info("The trainer has used a potion to heal 50 health back to ".$pokemon->getName().spl_object_id($pokemon));
            Console::info("-------------------------------");
        }
    }

    private
    function setWeather()
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

    public function setEnvironment() {
        $this->environment = "";
        $dice = rand(1, 5);
        if ($dice === 1) {
            Console::info("This battle takes place near the water, fire type's have been debuffed!");
            Console::info("-------------------------------");
            $this->environment = "water";
        }
        if ($dice === 2) {
            Console::info("This battle takes place in the mountains, dark type's have been debuffed!");
            Console::info("-------------------------------");
            $this->environment = "mountains";
        }
        if ($dice === 3) {
            Console::info("This battle takes place on the ground, flying type's have been debuffed");
            Console::info("-------------------------------");
            $this->environment = "ground";
        }
        if ($dice === 4) {
            Console::info("This battle takes place in the sky, ground type's have been debuffed!");
            Console::info("-------------------------------");
            $this->environment = "sky";
        }
        if ($dice === 5) {
            Console::info("This battle takes place in the caves, ice and fairy types have been debuffed.");
            Console::info("-------------------------------");
            $this->environment = "caves";
        }
    }

    private
    function setMega(
        Pokemon $pokemon
    ) {
        $calc = round($pokemon->getCombatPower() / 2);
        if ($pokemon->hasMegaEvolve()) {
            if (rand(1, 10) === 1) {
                Console::info($pokemon->getName().spl_object_id($pokemon)." Has mega evolved");
                $pokemon->setCombatPower($pokemon->getCombatPower() + $calc);
            }
        }
    }
    private function DeBuff(Pokemon $pokemon) {
        if ($pokemon->isDeBuffed($this->environment)) {
            $pokemon->setHealth($pokemon->getHealth() - 50);
        }
    }

    private
    function battle(
        Pokemon $pokemon1,
        Pokemon $pokemon2,
        bool $recursive = true,
        bool $startofbattle = true
    ) {
        if ($startofbattle) {
            $this->setWeather();
            $this->setEnvironment();
            $this->setMega($pokemon1);
            $this->setMega($pokemon2);
            if ($pokemon1->isDeBuffed($this->environment)) {
                $pokemon1->setHealth($pokemon1->getHealth() - 50);
            }
            if ($pokemon2->isDeBuffed($this->environment)) {
                $pokemon2->setHealth($pokemon2->getHealth() - 50);
            }
        }
        $moves1 = $pokemon1->getMoves();
        $moves2 = $pokemon2->getMoves();
        if ($pokemon1->getHealth() > 0) {
            if ($pokemon1->getHealth() < 150) {
                if (rand(1, 3) === 3) {
                    $this->usePotion($pokemon1);
                } else {
                    Console::info($pokemon1->getName().spl_object_id($pokemon1)." attacks!");
                    Console::info("-------------------------------");
                    $this->setHP($moves1[array_rand($moves1)], $pokemon1, $pokemon2);
                }
            } else {
                Console::info($pokemon1->getName().spl_object_id($pokemon1)." attacks!");
                Console::info("-------------------------------");
                $this->setHP($moves1[array_rand($moves1)], $pokemon1, $pokemon2);
            }
        }
        if ($pokemon2->getHealth() > 0) {
            if ($pokemon2->getHealth() < 150) {
                if (rand(1, 3) === 3) {
                    $this->usePotion($pokemon2);
                } else {
                    Console::info($pokemon2->getName().spl_object_id($pokemon2)." attacks!");
                    Console::info("-------------------------------");
                    $this->setHP($moves2[array_rand($moves2)], $pokemon2, $pokemon1);
                }
            } else {
                Console::info($pokemon2->getName().spl_object_id($pokemon2)." attacks!");
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
                Console::succes($pokemon1->getName().spl_object_id($pokemon1)." wins this battle with ".$pokemon1->getHealth()
                    ." HP left!");
                Console::error($pokemon2->getName().spl_object_id($pokemon2)." has been defeated.");
            } else { // Pokemon2 wins
                Console::succes($pokemon2->getName().spl_object_id($pokemon2)." wins this battle with ".$pokemon2->getHealth()
                    ." HP left!");
                Console::error($pokemon1->getName().spl_object_id($pokemon1)." has been defeated.");
            }
        }
    }

    private
    function raid(
        Pokemon $boss,
        Pokemon $pokemon1,
        Pokemon $pokemon2,
        Pokemon $pokemon3,
        Pokemon $pokemon4,
        Pokemon $pokemon5,
        Pokemon $pokemon6,
        bool $startOfBattle = true
    ) {
        $array = [$pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6,];
        if ($startOfBattle) {
            $this->setEnvironment();
            $boss->setHealth(4500);
            $boss->setShields(0);
            foreach ($array as $pokemon) {
                $this->setMega($pokemon);
            }
            foreach ($array as $pokemon) {
                $this->deBuff($pokemon);
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
                        Console::info($pokemon->getName().spl_object_id($pokemon)." attacks!");
                        $this->setRaidHP($moves[array_rand($moves)], $pokemon, $boss);
                    }
                } else {
                    Console::info($pokemon->getName().spl_object_id($pokemon)." attacks!");
                    $this->setRaidHP($moves[array_rand($moves)], $pokemon, $boss);
                }
            }
        }
        if ($boss->gethealth() <= 0) {
            Console::succes($boss->getName().spl_object_id($boss)." has been defeated, the attackers have won this raid!");
            Console::info("---------------------------------");
            foreach ($array as $pokemon) {
                $this->getAlive($pokemon);
            }
            die;
        }
        foreach ($array as $pokemon) {
            $bossmoves = $boss->getMoves();
            if ($pokemon->getHealth() > 0) {
                Console::info($boss->getName().spl_object_id($boss)." attacks!");
                $this->setRaidHP($bossmoves[array_rand($bossmoves)], $pokemon, $pokemon);
            }
        }
        if ($pokemon1->getHealth() <= 0 && $pokemon2->getHealth() <= 0 && $pokemon3->getHealth() <= 0 && $pokemon4->getHealth() <= 0
            && $pokemon5->getHealth() <= 0
            && $pokemon6->getHealth() <= 0
        ) {
            Console::error("All of your pokemon have fallen, ".$boss->getName()." has won this raid with ".$boss->gethealth()."HP left!");
            die;
        }
        $this->raid($boss, $pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6, false);
    }

    private
    function teamBattle(
        array $team1,
        string $trainer1,
        array $team2,
        string $trainer2,
        bool $startofbattle = true
    ) {
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
                Console::info($trainer1." sends out ".$team1[0]->getName());
            }
        }
        if ($pokemon2->getHealth() <= 0) {
            unset($team2[0]);
            $team2 = array_values($team2);
            if (!empty($team2)) {
                Console::info($trainer2." sends out ".$team2[0]->getName());
            }
        }
        if (empty($team1)) {
            Console::succes($trainer2." wins");
        } elseif (empty($team2)) {
            Console::succes($trainer1." wins");
        } else {
            $this->teamBattle($team1, $trainer1, $team2, $trainer2, false);
        }
    }
}
