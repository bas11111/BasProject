<?php
include 'PokemonCommand.php';
$models = glob('models/' . '/*.php');

foreach ($models as $file) {
    require($file);
}

$pokemons = glob('models/pokemon/' . '/*.php');

foreach ($pokemons as $file) {
    require($file);
}

$pokemonMoves = glob('models/pokemon/PokemonMove/' . '/*.php');

foreach ($pokemonMoves as $file) {
    require($file);
}