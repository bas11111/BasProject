<?php

date_default_timezone_set('Etc/GMT-2');
class Games
{
    public function actionIndex()
    {
//        $this->calc(12, 12, "+");
//        $this->coinFlip();
//        $this->eightBall("Are you the magic 8 ball?");
//        $this->counting(20);
//        $this->highest(19, 20);
        $this->story();
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

    public function highest(int $num1, int $num2){
        if ($num1 > $num2) {
            Console::succes("Number 1 is higher then number 2");
        } elseif ($num2 > $num1) {
            Console::error("Number 2 is higher then number 1");
        }
    }

    public function story() {
        $num1 = rand(1, 2);
        Console::info("You hear a strange noise outside.");
        if ($num1 === 1) {
            Console::info("You decide to investigate");
            $num1 = 3;
        } elseif ($num1 === 2) {
            Console::info("You ignore the sound");
            $num1 = 4;
        }
        if ($num1 === 3) {
            Console::info("You investigate, but the noise suddenly stopped");
            $num1 = 5;
        } elseif ($num1 === 4) {
            Console::info("The sound keeps getting louder and louder");
            $num1 = 6;
        }
        if ($num1 === 5) {
            Console::info("You decide to go back to your work");
            $num1 = 7;
        } elseif ($num1 === 6) {
            Console::info("You decide to go check it out, since the sound gets louder and louder");
            $num1 = 8;
        }
        if ($num1 === 7) {
            Console::info("The sound returns");
            $num1 = 9;
        } elseif ($num1 === 8) {
            Console::info("You open the door, and the sound seems to come from above");
            $num1 = 10;
        }
        if ($num1 === 9) {
            Console::info("You go outside this time to investigate, and notice the sounds seems to be coming towards you now.");
            $num1 = 11;
        } elseif ($num1 === 10) {
            Console::info("You look up, and an anvil drops on your face. You died");
            Console::info("---------------------------------------------------------------------------------");
        }
        if ($num1 === 11) {
            Console::info("You look to where the sound is coming from, and see a car slowly driving towards you");
            Console::info("The car suddenly speeds up, and goes straight towards you");
            Console::info("You start running away, but the car catches up");
            Console::info("The car hits you, and you die. ");
            Console::info("---------------------------------------------------------------------------------");
        }
    }
}