<?php

namespace models\furniture;

class Carpet extends House
{
    protected int $maxDurability = 100;
    protected int $durability = 100;
    protected int $lengthcm = 200;
    protected int $widthcm = 100;
    protected int $heightcm = 1;
}