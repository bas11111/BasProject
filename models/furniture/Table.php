<?php

namespace models\furniture;

class Table extends House
{
    protected int $maxDurability = 100;
    protected int $durability = 100;
    protected int $lengthcm = 185;
    protected int $widthcm = 65;
    protected int $heightcm  = 50;
}