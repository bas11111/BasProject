<?php

namespace models\pokemon;
use models\moves\BulletPunch;
use models\moves\FireBreath;
use models\moves\FlameBlast;
use models\moves\Incinerate;
use models\moves\IronTail;

class Entei extends Pokemon
{
    protected array $type = ["fire"];
    protected int $shields = 2;
    protected int $potions = 2;

    public function hasMegaEvolve(): bool
    {
        return false;
    }

    public function getAvailableMoves(): array
    {
        return [
            1 => FireBreath::class,
            7 => BulletPunch::class,
            22 => IronTail::class,
            50 => Incinerate::class,
            80 => FlameBlast::class
        ];
    }
}