<?php

use models\furniture\Chair;
use models\furniture\Closet;
use models\furniture\Table;

class HouseCommand
{
    public function actionIndex()
    {
//        $this->door(new Chair(100, 100, 50, 50, 75));
        $this->closet(new Closet(50, 50, 150), new Table(49, 100, 5));
    }

    public function door($furniture)
    {
        if ($furniture->getHeight() >= 200 || $furniture->getWidth() >= 100) {
            Console::error("The furniture does not fit through the door!");
        } elseif ($furniture->getHeight() < 200 || $furniture->getWidth < 100) {
            Console::succes("The furniture does fit through the door!");
        }
    }

    public function closet($closet, $furniture)
    {
        if ($closet->getLength() > $furniture->getLength() and $closet->getWidth() > $furniture->getWidth() and $closet->getHeight()
            > $furniture->getHeight()
        ) {
            Console::succes("The furniture does fit in the closet.");
        } else {
            Console::error("The furniture does NOT fit in the closet!");
            Console::info("You flip the furniture, maybe now it fits?");
            $furniture->setHeight($furniture->getWidth());
            $furniture->setWidth($furniture->getHeight());
            Console::info($furniture->getHeight());
            Console::info($furniture->getWidth());
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