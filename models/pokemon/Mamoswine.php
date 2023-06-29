<?php

namespace models\pokemon;

use models\moves\Avalanche;
use models\moves\Cut;
use models\moves\Earthquake;
use models\moves\IceFang;
use models\moves\IceKick;
use models\moves\MudShot;
use models\moves\MudSlap;

class Mamoswine extends Pokemon
{
    protected array $type = ["ice", "ground"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => IceKick::class,
            11 => MudSlap::class,
            27 => MudShot::class,
            45 => Cut::class,
            60 => IceFang::class,
            80 => Avalanche::class,
            90 => Earthquake::class,
        ];
    }
}