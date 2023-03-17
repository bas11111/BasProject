<?php

spl_autoload_register(function ($className) {
    include $className.'.php';
});

require 'PokemonCommand.php';