<?php
require 'autoload.php';
require 'Console.php';

$command = new \PokemonCommand();
$command2 = new \Games();
$command->actionIndex();
Console::info("");
Console::info("");
$command2->actionIndex();
