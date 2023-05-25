<?php
require 'autoload.php';
require 'Console.php';

$command = new \PokemonCommand();
$command2 = new \Games();
$command3 = new HouseCommand();
//$command->actionIndex();
$command2->actionIndex();
//$command3->actionIndex();
