<?php

use models\furniture\Chair;
use models\furniture\Closet;
use models\furniture\Table;

class HouseCommand
{
    public function actionIndex()
    {
        $this->door(new Chair(50, 500, 75));
//        $this->closet(new Closet(50, 50, 150), new Table(49, 100, 5));
    }

    public function door($furniture)
    {
        $height = $furniture->getHeight();
        $width = $furniture->getWidth();
        if ($furniture->getHeight() < 200 || $furniture->getWidth() < 100) {
            Console::succes("The furniture does fit through the door!");
        } elseif ($furniture->getHeight() >= 200 || $furniture->getWidth >= 100) {
            Console::error("The furniture does not fit through the door!");
            Console::info("Maybe if you flip the furniture, it does fit through the door?");
            $furniture->setHeight($width);
            $furniture->setWidth($height);
            Console::info($height);
            Console::info($width);
            if ($furniture->getHeight() < 200 || $furniture->getWidth() < 100) {
                Console::error("The furniture does fit through the door!");
            } elseif ($furniture->getHeight() >= 200 || $furniture->getWidth >= 100) {
                Console::succes("The furniture does not fit through the door!");
            }
        }
    }

    public function closet($closet, $furniture)
    {
        $height = $furniture->getHeight();
        $width = $furniture->getWidth();
        Console::info("Current height: ".$furniture->getHeight());
        Console::info("Current width: ".$furniture->getWidth());
        if ($closet->getLength() > $furniture->getLength() and $closet->getWidth() > $furniture->getWidth() and $closet->getHeight()
            > $furniture->getHeight()
        ) {
            Console::succes("The furniture does fit in the closet.");
        } else {
            Console::error("The furniture does NOT fit in the closet!");
            Console::info("You flip the furniture, maybe now it fits?");
            $furniture->setHeight($width);
            $furniture->setWidth($height);
            Console::info("Current height: ".$furniture->getHeight());
            Console::info("Current width: ".$furniture->getWidth());
            if ($closet->getLength() > $furniture->getLength() and $closet->getWidth() > $furniture->getWidth() and $closet->getHeight()
                > $furniture->getHeight()
            ) {
                Console::succes("You flipped the furniture, and now it does fit in the closet.");
            } else {
                Console::error("You flipped the furniture, but it still does not fit in the closet.");
            }
        }
    }
}