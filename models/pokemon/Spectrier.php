<?php

namespace models\pokemon;

class Spectrier extends Pokemon
{
    protected array $type = ["ghost"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public static function getAvailableMoves(): array
    {
        return [
            1 => "PoisonJab",
            21 => "Hex",
            36 => "Snarl",
            47 => "FeintAttack",
            61 => "Astonish",
            80 => "Poltergeist"];
    }
}