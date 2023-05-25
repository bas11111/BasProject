<?php

namespace models\furniture;

class Closet extends House
{
    protected int $maxDurability = 100;
    protected int $durability = 100;
    protected int $lengthcm = 30;
    protected int $widthcm = 75;
    protected int $heightcm = 180;
}