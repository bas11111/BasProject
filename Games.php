<?php

date_default_timezone_set('Etc/GMT-2');
class Games
{
    public function actionIndex()
    {
        $this->calc(12, 12, "+");
        $this->coinFlip();
        $this->eightBall("Can you count to 20?");
        $this->counting(20);
    }

    public function calc(int $num1, int $num2, string $sum) {
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

    public function coinFlip() {
        $rand = rand(1, 2);
        if ($rand === 1) {
            Console::info("The coin landed on heads!");
        } elseif ($rand === 2) {
            Console::info("The coin landed on heads!");
        }
    }

    public function eightBall(string $question) {
        if ($question === "") {
            Console::error("Error: you have not asked a question! Please ask a question!");
            die;
        }
        $rand = rand(1, 20);
        Console::info("You asked: " . $question);
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

    public function counting(int $limit) {
        for ($i = 1; $i<=$limit; $i++) {
            Console::info("$i");
            usleep(100000);
        }
    }
}