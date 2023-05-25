<?php

use models\furniture\Chair;

class HouseCommand
{
    public function actionIndex() {
        $this->door(new Chair(100, 100, 50, 50, 75));
    }

    public function door($furniture) {
        if ($furniture->getHeight() >= 200 || $furniture->getWidth() >= 100){
            Console::error("The furniture does not fit through the door!");
        } elseif ($furniture->getHeight() < 200 || $furniture->getWidth < 100) {
            Console::succes("The furniture does fit through the door!");
        }
    }
}