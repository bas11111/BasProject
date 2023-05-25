<?php

namespace models\furniture;

class Chair extends House
{
    protected int $maxDurability = 100;
    protected int $durability = 100;
    protected int $lengthcm = 50;
    protected int $widthcm = 50;
    protected int $heightcm = 75;
}