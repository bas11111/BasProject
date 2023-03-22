<?php

use models\moves\Move;
use models\pokemon\Abomasnow;
use models\pokemon\Articuno;
use models\pokemon\Charizard;
use models\pokemon\Dragonite;
use models\pokemon\Entei;
use models\pokemon\Garchomp;
use models\pokemon\Gyarados;
use models\pokemon\Hydreigon;
use models\pokemon\Lucario;
use models\pokemon\Machamp;
use models\pokemon\Meganium;
use models\pokemon\Metagross;
use models\pokemon\Mewtwo;
use models\pokemon\Pokemon;
use models\pokemon\Raikou;
use models\pokemon\Rhyperior;
use models\pokemon\Snorlax;
use models\pokemon\Suicune;
use models\pokemon\Tyranitar;
use models\pokemon\Venusaur;
use models\pokemon\Yveltal;
use models\pokemon\Zapdos;

class PokemonCommand
{
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
        ];
//        $this->raid($pokemons[array_rand($pokemons)], $pokemons[0], $pokemons[10], $pokemons[4], $pokemons[12], $pokemons[6], $pokemons[11]);
        $this->raid($pokemons[array_rand($pokemons)], clone $pokemons[array_rand($pokemons)], clone $pokemons[array_rand($pokemons)],
            clone $pokemons[array_rand($pokemons)], clone $pokemons[array_rand($pokemons)], clone $pokemons[array_rand($pokemons)],
            clone $pokemons[array_rand($pokemons)]);
//        $this->battle($pokemons[9], clone $pokemons[5]);
//        $this->teamBattle([$pokemons[5]], [$pokemons[9], $pokemons[15]]);
    }

    private function calculateDamage(Move $move, Pokemon $target)
    {
        if ($move->isCharged()) {
            Console::echo("A charged attack, ".$move->getName().", was used!");
            if ($move->isEffectiveAgainst($target->getType())) {
                Console::echo("It was very effective!");
                $damage = $move->getDamage() + rand(30, 40);
            } elseif ($move->isNotEffectiveAgainst($target->getType())) {
                Console::echo("It wasn't very effective...");
                $damage = $move->getDamage() - rand(30, 40);
                if ($damage < 20) {
                    $damage = 20;
                }
            } else {
                $damage = $move->getDamage();
            }
        } else {
            Console::echo($move->getName()." was used!");
            if ($move->isEffectiveAgainst($target->getType())) {
                Console::echo("It was very effective!");
                $damage = $move->getDamage() + rand(10, 20);
            } elseif ($move->isNotEffectiveAgainst($target->getType())) {
                Console::echo("It wasn't very effective...");
                $damage = $move->getDamage() - rand(5, 10);
                if ($damage < 10) {
                    $damage = 1;
                }
            } else {
                $damage = $move->getDamage();
            }
        }

        return $damage;
    }

    private function attackType(Move $move, Pokemon $target)
    {
        $targetHealth = $target->getHealth();
        $targetHealth -= $this->calculateDamage($move, $target);
        Console::echo($target->getName()." now has ".$targetHealth." HP left!");
        Console::echo("-------------------------------");
        $target->setHealth($targetHealth);
    }

    private function raidAttackType(Move $move, Pokemon $target)
    {
        $targetHealth = $target->getHealth();
        $targetHealth -= $this->calculateDamage($move, $target);
        Console::echo($target->getName().spl_object_id($target)." now has ".$targetHealth." HP left!");
        Console::echo("---------------------------------");
        $target->setHealth($targetHealth);
        if ($targetHealth <= 0) {
            Console::echo($target->getName().spl_object_id($target)." has fallen!");
            Console::echo("---------------------------------");
        }
    }

    private function getAlive($pokemon)
    {
        if ($pokemon->getHealth() > 0) {
            Console::echo($pokemon->getName().spl_object_id($pokemon)." has survived this battle with ".$pokemon->getHealth()." left!");
        }
    }

    private function usePotion($pokemon)
    {
        if (rand(1, 10) === 10) {
            $pokemon->setHealth(min($pokemon->getHealth() + 100, $pokemon->getMaxHealth()));
            Console::echo("The trainer has used a potion to heal 100 health back to ".$pokemon->getName().spl_object_id($pokemon));
            Console::echo("-------------------------------");
        } else {
            $pokemon->setHealth(min($pokemon->getHealth() + 50, $pokemon->getMaxHealth()));
            Console::echo("The trainer has used a potion to heal 50 health back to ".$pokemon->getName().spl_object_id($pokemon));
            Console::echo("-------------------------------");
        }
    }

    private function battle(Pokemon $pokemon1, Pokemon $pokemon2, bool $recursive = true)
    {
        //AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA TEEEEST
        $moves1 = $pokemon1->getMoves();
        $moves2 = $pokemon2->getMoves();
        if ($pokemon1->getHealth() > 0) {
            Console::echo($pokemon1->getName()." attacks!");
            Console::echo("-------------------------------");
            $this->attackType($moves1[array_rand($moves1)], $pokemon2);
        }
        if ($pokemon2->getHealth() > 0) {
            Console::echo($pokemon2->getName()." attacks!");
            Console::echo("-------------------------------");
            $this->attackType($moves2[array_rand($moves2)], $pokemon1);
        }
        if ($pokemon1->getHealth() > 0 && $pokemon2->getHealth() > 0) {
            if ($recursive) {
                $this->battle($pokemon1, $pokemon2, $recursive);
            }
        } else {
            if ($pokemon2->getHealth() <= 0) { // Pokemon1 wins
                Console::echo($pokemon1->getName().spl_object_id($pokemon1)." wins this battle with ".$pokemon1->getHealth()
                    ." HP left!");
                Console::echo($pokemon2->getName().spl_object_id($pokemon2)." has been defeated.");
            } else { // Pokemon2 wins
                Console::echo($pokemon2->getName().spl_object_id($pokemon2)." wins this battle with ".$pokemon2->getHealth()
                    ." HP left!");
                Console::echo($pokemon1->getName().spl_object_id($pokemon1)." has been defeated.");
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
        $array = [$pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6];
        if ($startOfBattle) {
            $boss->setHealth(4750);
            if (rand(1,2) === 2) {
                Console::echo($pokemon1->getName()."has MEGA-evolved");
            }
        }
        foreach ($array as $pokemon) {
            $moves = $pokemon->getmoves();
            if ($pokemon->getHealth() > 0) {
                if ($pokemon->getHealth() < 150) {
                    if (rand(1, 3) === 3) {
                        $this->usePotion($pokemon);
                    } else {
                        Console::echo($pokemon->getName().spl_object_id($pokemon)." attacks!");
                        $this->raidAttackType($moves[array_rand($moves)], $boss);
                    }
                } else {
                    Console::echo($pokemon->getName().spl_object_id($pokemon)." attacks!");
                    $this->raidAttackType($moves[array_rand($moves)], $boss);
                }
            }
        }
        if ($boss->gethealth() <= 0) {
            Console::echo($boss->getName().spl_object_id($boss)." has been defeated, the attackers have won this raid!");
            Console::echo("---------------------------------");
            foreach ($array as $pokemon) {
                $this->getAlive($pokemon);
            }
            die;
        }
        foreach ($array as $pokemon) {
            $bossmoves = $boss->getMoves();
            if ($pokemon->getHealth() > 0) {
                Console::echo($boss->getName().spl_object_id($boss)." attacks!");
                $this->raidAttackType($bossmoves[array_rand($bossmoves)], $pokemon);
            }
        }
        if ($pokemon1->getHealth() <= 0 && $pokemon2->getHealth() <= 0 && $pokemon3->getHealth() <= 0 && $pokemon4->getHealth() <= 0
            && $pokemon5->getHealth() <= 0
            && $pokemon6->getHealth() <= 0
        ) {
            Console::echo("All of your pokemon have fallen, ".$boss->getName()." has won this raid with ".$boss->gethealth()."HP left!");
            die;
        }
        $this->raid($boss, $pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6, false);
    }

    private function teamBattle(array $team1, array $team2)
    {
        $pokemon1 = $team1[0];
        $pokemon2 = $team2[0];
        if (!$pokemon1 instanceof Pokemon) {
            Console::echo("error");
            die;
        }
        $this->battle($pokemon1, $pokemon2, false);

        if ($pokemon1->getHealth() <= 0) {
            unset($team1[0]);
            $team1 = array_values($team1);
            if (!empty($team1)) {
                Console::echo("Team 1 sends out ".$team1[0]->getName());
            }
        }
        if ($pokemon2->getHealth() <= 0) {
            unset($team2[0]);
            $team2 = array_values($team2);
            if (!empty($team2)) {
                Console::echo("Team 2 sends out ".$team2[0]->getName());
            }
        }
        if (empty($team1)) {
            Console::echo("Team 2 wins");
        } elseif (empty($team2)) {
            Console::echo("Team 1 wins");
        } else {
            $this->teamBattle($team1, $team2);
        }
    }
}
