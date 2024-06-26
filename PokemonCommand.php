<?php

use models\moves\Move;
use models\pokemon\Pokemon;

class PokemonCommand
{
    private string $weather;
    private string $environment;

    public function actionIndex()
    {
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
                $level = (int)$row[$headers["Level"]];
                $calc = round((int)$level * 4);
                $calc2 = round((int)$level * 35);
                $maxHealth = (int)$row[$headers["maxHealth"]] + (int)$calc;
                $health = $maxHealth;
                $about = $row[$headers["About"]];
                $entry = $row[$headers["Pokedex"]];
                $CP = (int)$row[$headers["CP"]] + (int)$calc2;
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
                    throw new Exception("File not found: ".$class.".");
                }
                $moves = [
                    $row[$headers["Move1"]] ?? null,
                    $row[$headers["Move2"]] ?? null,
                    $row[$headers["Move3"]] ?? null,
                    $row[$headers["Move4"]] ?? null,
                ];
                foreach ($moves as $key => $move) {
                    if (empty($move)) {
                        unset($moves[$key]);
                    }
                }
                /** @var Pokemon $pokemon */
                $pokemon = new $class($level, $moves, $about, $entry);
                $teams[$trainer][] = $pokemon;
            }
        } catch (Exception $e) {
            Console::error("Error: ".$e->getMessage());
            var_dump($e->getTraceAsString());
            die;
        }
        fclose($handle);
        $trainer1 = 'Bas';
        $trainer2 = 'Melvin';
        if (!isset($teams[$trainer1]) || !isset($teams[$trainer2])) {
            Console::error('Error: One of the selected trainers does not have a team. Please designate a team to this trainer.');
            die;
        }

//        var_dump($teams["Bas"][6]);
//        $this->teamBattle($teams[$trainer1], $trainer1, $teams[$trainer2], $trainer2);
        $this->battle($teams["Melvin"][1], clone($teams["Bas"][2]));
//        $this->pokeDex($teams["Bas"][10]);
//        $this->raid(clone($teams["Bas"][rand(1, 8)]), clone($teams["Bas"][0]), $teams["Bas"][1], $teams["Bas"][2], $teams["Bas"][3],
//            $teams["Bas"][4], $teams["Bas"][5]);
//        $this->wildBattle($teams[$trainer1]);
    }

    private function pokeDex(Pokemon $pokemon): void
    {
        Console::info("Name: ".$pokemon->getName());
        Console::info("HP: ".$pokemon->getHealth());
        Console::info("CP: ".$pokemon->getCombatPower());
        Console::info("Level: ".$pokemon->getLevel());
        foreach ($pokemon->getType() as $type) {
            Console::info("Type: ".$type);
        }
        Console::info("About this Pokemon: ".$pokemon->getAbout());
        Console::info("Pokedex entry: ".$pokemon->getEntry());
        Console::info("-------------");
        Console::info("Move set:");
        foreach ($pokemon->getAvailableMovesAtLevel() as $move) {
            Console::warning($move->getName(), 1);
        }
    }


    private function setHP(
        Move $move,
        Pokemon $attacker,
        Pokemon $target
    ) {
        $targetHealth = $target->getHealth();
        $damage = $move->calculateDamage($attacker, $target, $this->weather);
        Console::info($attacker->getName().' uses '.$move->getName()."!");
        if ($move->isEffectiveAgainst($target->getType())) {
            Console::succes("It was very effective!");
        } elseif ($move->isNotEffectiveAgainst($target->getType())) {
            Console::error("It wasn't very effective...");
        }
        $targetShields = $target->getShields();
        if ($move->isCharged()) {
            if ($target->getShields() > 0) {
                if (rand(1, 1) === 2) {
                    $damage = 0;
                    Console::succes($target->getName()." has used a shield to block the incoming attack");
                    $target->setShields($targetShields - 1);
                    Console::info($target->getName().spl_object_id($target)." now has ".$target->getShields()." shield left!");
                }
            }
        }
        Console::info("It did ".$damage." Damage");
        $targetHealth -= $damage;
        if (rand(1, 10) === 1) {
            $rand = rand(5, 10);
            Console::info($attacker->getName()." used a follow-up attack for ".$rand." damage!");
            $targetHealth -= $rand;
            Console::info("Total damage: ".$damage + $rand);
        }
        if (rand(1, 5) === 5) {
            if ($move->getType() === "fire") {
                $rand = rand(1, 6);
                Console::succes($target->getName(). " is now burning, gaining an aditional {$rand} damage");
                $targetHealth -= $rand;
                Console::info("Total damage: ".$damage + $rand);
            }
        }
        //veranderd hp van de pokemon naar wat he moet zijn na de aanval
        $target->setHealth($targetHealth);
        Console::info($target->getName().spl_object_id($target)." now has ".$targetHealth." HP left!");
        Console::info("-------------------------------");
    }

    private function setRaidHP(
        //doet eigenlijk hetzelfde als de normale setHP, maar met een aantal aanpassing om het meer compatible te maken met de raid
        Move $move,
        Pokemon $attacker,
        Pokemon $target
    ) {
        $targetHealth = $target->getHealth();
        $damage = $move->calculateDamage($attacker, $target, $this->weather);
        $targetHealth -= $damage;
        Console::info($attacker->getName().spl_object_id($attacker)." used ".$move->getName());
        if ($move->isEffectiveAgainst($target->getType())) {
            Console::succes("It was very effective");
        } elseif ($move->isNotEffectiveAgainst($target->getType())) {
            Console::error("It wasn't very effective");
        }
        Console::info("The attack did ".$damage." damage");
        Console::info($target->getName().spl_object_id($target)." now has ".$targetHealth." HP left!");
        Console::info("---------------------------------");
        $target->setHealth($targetHealth);
        if ($targetHealth <= 0) {
            Console::error($target->getName().spl_object_id($target)." has fallen!");
            Console::info("---------------------------------");
        }

        return $damage;
    }

    private function getAlive(
        $pokemon
    ) {
        if ($pokemon->getHealth() > 0) {
            Console::succes($pokemon->getName().spl_object_id($pokemon)." has survived this battle with ".$pokemon->getHealth()." left!");
        }
    }
    //genereerd random number, en zet weather van battle aan hand van dat nummer
    private function setWeather()
    {
        $this->weather = "";
        $dice = rand(1, 7);
        Console::info("---------------------------------------------------------------------------");
        switch ($dice) {
            case 1:
                Console::info("The weather is sunny! Grass, ground and fire type attacks are now boosted!");
                $this->weather = "sunny";
                break;
            case 2:
                Console::info("The weather is rainy! Water, electric and bug type attacks are now boosted!");
                $this->weather = "rainy";
                break;
            case 3:
                Console::info("The weather is windy! Dragon, flying and psychic type attacks are now boosted!");
                $this->weather = "windy";
                break;
            case 4:
                Console::info("The weather is snowy! Ice and steel type attacks are now boosted!");
                $this->weather = "snowy";
                break;
            case 5:
                Console::info("The weather is foggy! Ghost and dark type attacks are now boosted!");
                $this->weather = "foggy";
                break;
            case 6:
                Console::info("The weather is cloudy! Fairy, fighting and poison type attacks are now boosted!");
                $this->weather = "cloudy";
                break;
            case 7:
                Console::info("The weather is partly cloudy! Normal and rock type attacks are now boosted!");
                $this->weather = "partly cloudy";
                break;
        }
        Console::info("---------------------------------------------------------------------------");
    }
    //genereerd random number, en zet environment van battle
    public function setEnvironment()
    {
        $this->environment = "";
        $dice = rand(1, 5);
        switch ($dice) {
            case 1:
                Console::info("This battle takes place near the water, fire type's have been debuffed!");
                $this->environment = "water";
                break;
            case 2:
                Console::info("This battle takes place in the mountains, dark type's have been debuffed!");
                $this->environment = "mountains";
                break;
            case 3:
                Console::info("This battle takes place on the ground, flying type's have been debuffed!");
                $this->environment = "ground";
                break;
            case 4:
                Console::info("This battle takes place in the sky, ground type's have been debuffed!");
                $this->environment = "sky";
                break;
            case 5:
                Console::info("This battle takes place in the caves, ice and fairy types have been debuffed!");
                $this->environment = "caves";
                break;
        }
        Console::info("-----------------------------------------------------------------------------");
    }


    private function setMega(
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

    private function DeBuff(Pokemon $pokemon)
    {
        if ($pokemon->isDeBuffed($this->environment)) {
            $pokemon->setHealth($pokemon->getHealth() - 50);
        }
    }

    private function battle(
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
            $this->DeBuff($pokemon1);
            $this->DeBuff($pokemon2);
        }
        $moves1 = $pokemon1->getBestMove($pokemon2, $this->weather);
        $moves2 = $pokemon2->getBestMove($pokemon1, $this->weather);
        if ($pokemon1->getHealth() > 0) {
            Console::info($pokemon1->getName().spl_object_id($pokemon1)." attacks!");
            Console::info("-------------------------------");
            $this->setHP($moves1, $pokemon1, $pokemon2);
        }
        if ($pokemon2->getHealth() > 0) {
            Console::info($pokemon2->getName().spl_object_id($pokemon2)." attacks!");
            Console::info("-------------------------------");
            $this->setHP($moves2, $pokemon2, $pokemon1);
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

    private function raid(
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
            $moves = $pokemon->getBestMove($boss, $this->weather);
            if ($pokemon->getHealth() > 0) {
                Console::info("{$pokemon->getName()}".spl_object_id($pokemon)." attacks!");
                $this->setRaidHP($moves, $pokemon, $boss);
            }
        }
        if ($boss->gethealth() <= 0) {
            Console::succes("{$boss->getName()}".spl_object_id($boss)."has been defeated, the attackers have won this raid!");
            Console::info("---------------------------------");
            foreach ($array as $pokemon) {
                $this->getAlive($pokemon);
            }
            die;
        }
        foreach ($array as $pokemon) {
            $bossmoves = $boss->getBestMove($pokemon, $this->weather);
            if ($pokemon->getHealth() > 0) {
                Console::info($boss->getName().spl_object_id($boss)." attacks!");
                $this->setRaidHP($bossmoves, $boss, $pokemon);
            }
        }
        if ($pokemon1->getHealth() <= 0 && $pokemon2->getHealth() <= 0 && $pokemon3->getHealth() <= 0 && $pokemon4->getHealth() <= 0
            && $pokemon5->getHealth() <= 0
            && $pokemon6->getHealth() <= 0
        ) {
            Console::error("All of your pokemon have fallen, {$boss->getName()} has won this raid with {$boss->gethealth()}HP left!");
            die;
        }
        $this->raid($boss, $pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6, false);
    }

    private function teamBattle(
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

    /**
     * @param  Pokemon[]  $team
     *
     * @return void
     */
    public function wildBattle(array $team)
    {
        //scant mijn complete directory waar de pokemons in staan.
        $results = scandir("models\pokemon");
        // alles wat in die array staat word verwijderd uit de naam van de file, waardoor alleen de pokemon naam nog over is
        $invalidResults = [
            '.',
            '..',
            'Pokemon.php',
        ];
        foreach ($results as $index => $result) {
            if (in_array($result, $invalidResults)) {
                unset($results[$index]);
            }
        }
        $results = array_values($results);
//        var_dump($results);
//        var_dump(count($results));
        $wildPokemonFile = $results[rand(0, count($results) - 1)];
//        var_dump($wildPokemonFile);
        $wildPokemonClassName = str_replace(".php", "", $wildPokemonFile);
//        var_dump($wildPokemonClassName);
        $wildPokemonClassPath = 'models\pokemon\\'.$wildPokemonClassName;
        $level = rand(50, 100);
        /** @var Pokemon $wildPokemonClass */

        $wildPokemonClass = new $wildPokemonClassPath($level);
        $pokemon1 = $team[0];
        $pokemon2 = $wildPokemonClass;
        $pokemon2->setLevel(rand(50, 100));
        Console::info("A wild ".$pokemon2->getName().$pokemon2->getLevel()." has appeared!");
        if (rand(1, 2) === 2) {
            Console::info("You decide to run away!");
        } else {
            Console::info("You decide to engage in combat!");
            $this->battle($pokemon1, $pokemon2);
            if ($pokemon1->getHealth() > 0) {
                Console::succes("You have defeated the wild ".$pokemon2->getName().$pokemon2->getLevel()."! Catch it before it runs away!");
                $this->catching($pokemon2);
            }
        }
    }

    public function catching($pokemon)
    {
        Console::info(".");
        sleep(1);
        if (rand(1, round($pokemon->getLevel() / 30)) === 1) {
            Console::info("..");
            sleep(1);
            if (rand(1, round($pokemon->getLevel() / 30)) === 1) {
                Console::info("...");
                sleep(1);
                Console::succes("Gotcha! ".$pokemon->getName()." was caught!");
            } else {
                Console::error($pokemon->getName()." broke free!");
                sleep(1);
                if (rand(1, 5) === 1) {
                    Console::error($pokemon->getName()." ran away!");
                    die;
                } else {
                    $this->catching($pokemon);
                }
            }
        } else {
            Console::error($pokemon->getName()." broke free!");
            sleep(1);
            if (rand(1, 5) === 1) {
                Console::error($pokemon->getName()." ran away!");
                die;
            } else {
                $this->catching($pokemon);
            }
        }
    }
}