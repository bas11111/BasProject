<?php

class Games
{
    public function actionIndex()
    {
        $path = 'test.csv';
        $handle = fopen($path, "r");
        $headers = fgetcsv($handle, 0, ";");
        foreach ($headers as $index => $value) {
            $value = str_replace('﻿', '', $value);
            $value = trim($value);
            $headers[$index] = $value;
        }
        $headers = array_flip($headers);
        while (($row = fgetcsv($handle, 1000, ";")) !== false) {
            $num1 = $row[$headers["num1"]];
            $num2 = $row[$headers["num2"]];
            $num3 = $row[$headers["num3"]];
            $sum = $row[$headers["sum"]];
            $question = $row[$headers["question"]];
        }
//        $this->calc($num1, $num2, $sum);
//        $this->coinFlip();
//        $this->eightBall($question);
//        $this->counting($num3);
//        $this->story();
        $this->randomNumberGenerator(1, 120);
    }

    public function randomNumberGenerator($num1, $num2) {
        $num = rand($num1, $num2);
        Console::info($num);
    }

    public function story()
    {
        Console::info("You wake up.");
        $num = rand(1, 2);
        if ($num === 1) {
            Console::succes("You decide to get out of bed.");
            $num = 3;
        } elseif ($num === 2) {
            Console::info("You hit the snooze button, and continue sleeping");
            $num = 4;
        }
        if ($num === 3) {
            Console::succes("You get ready for internship with alot of time to spare.");
            $num = 5;
        } elseif ($num === 4) {
            Console::error("You wake up half an hour later, and realize you overslept");
            $num = 6;
        }
        if ($num === 5) {
            Console::succes("You arrive on internship on time");
            $num = 7;
        } elseif ($num === 6) {
            Console::error("You arrive to late on your internship");
            $num = 8;
        }
        if ($num === 7) {
            Console::info("You work the entire day");
            $num = 9;
        } elseif ($num === 8) {
            Console::error("You lost your internship");
            $num = 10;
        }
        if ($num === 9) {
            Console::info("After working the entire the day, you go home.");
            $num = 11;
        } elseif ($num === 10) {
            Console::info("Because you lost internship, you decide to go home.");
            $num = 12;
        }
        if ($num === 11) {
            Console::info("You go to internship everyday, and eventually finish it.");
            $num = 13;
        } elseif ($num === 12) {
            Console::error("You become depressed because you can't find an internship, and you fail school.");
            $num = 14;
        }
        if ($num === 13) {
            Console::succes("You eventually gratuate school, and get a good job.");
            $num = 15;
        } elseif ($num === 14) {
            Console::error("You decide it's no longer worth it...");
            $num = 16;
        }
        if ($num === 15) {
            Console::succes("You live a succesful and happy life.");
        } elseif ($num === 16) {
            Console::error("You decide to end it all......");
            $num = 17;
        }
        if ($num === 17) {
            Console::error("If only you woke up on time that day......");
        }
    }

    public function calc(int $num1, int $num2, string $sum)
    {
        if ($sum === "+") {
            $result = $num1 + $num2;
            Console::info($result);
        }
        if ($sum === "-") {
            $result = $num1 - $num2;
            Console::info($result);
        }
        if ($sum === "x") {
            $result = $num1 * $num2;
            Console::info($result);
        }
        if ($sum === "/") {
            $result = $num1 / $num2;
            Console::info($result);
        }
    }

    public function coinFlip()
    {
        $rand = rand(1, 2);
        if ($rand === 1) {
            Console::info("The coin landed on heads!");
        } elseif ($rand === 2) {
            Console::info("The coin landed on tails!");
        }
    }

    public function eightBall(string $question)
    {
        if ($question === "") {
            Console::error("Error: you have not asked a question! Please ask a question!");
            die;
        }
        $rand = rand(1, 20);
        Console::info("You asked: ".$question);
        Console::info("My answer:");
        if ($rand === 1) {
            Console::succes("It is certain.");
        }
        if ($rand === 2) {
            Console::succes("It is decidedly so.");
        }
        if ($rand === 3) {
            Console::succes("Without a doubt.");
        }
        if ($rand === 4) {
            Console::succes("Yes, definitely.");
        }
        if ($rand === 5) {
            Console::succes("You may rely on it.");
        }
        if ($rand === 6) {
            Console::succes("As i see it, yes.");
        }
        if ($rand === 7) {
            Console::succes("Most likely.");
        }
        if ($rand === 8) {
            Console::succes("Outlook good.");
        }
        if ($rand === 9) {
            Console::succes("Yes.");
        }
        if ($rand === 10) {
            Console::succes("Signs point to yes.");
        }
        if ($rand === 11) {
            Console::info("Reply hazy, try again.");
        }
        if ($rand === 12) {
            Console::info("Ask again later.");
        }
        if ($rand === 13) {
            Console::info("Better not to tell you now.");
        }
        if ($rand === 14) {
            Console::info("Cannot predict now.");
        }
        if ($rand === 15) {
            Console::info("Concentrate and ask again.");
        }
        if ($rand === 16) {
            Console::error("Don't count on it.");
        }
        if ($rand === 17) {
            Console::error("No.");
        }
        if ($rand === 18) {
            Console::error("My sources say no.");
        }
        if ($rand === 19) {
            Console::error("Outlook not so good.");
        }
        if ($rand === 20) {
            Console::error("Very doubtfull");
        }
    }

    public function counting(int $limit)
    {
        for ($i = 1; $i <= $limit; $i++) {
            Console::info("$i");
            usleep(100000);
        }
    }
}