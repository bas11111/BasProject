<?php

namespace models\furniture;

abstract class House
{
    protected int $maxDurability;
    protected int $durability;
    protected int $lengthcm;
    protected int $widthcm;
    protected int $heightcm;
    public function __construct(int $maxDurability, int $durability, int $lengthcm, int $widthcm, int $heightcm) {
        $this->maxDurability = $maxDurability;
        $this->durability = $durability;
        $this->lengthcm = $lengthcm;
        $this->widthcm = $widthcm;
        $this->heightcm = $heightcm;
    }

    public function getHeight() {
        return $this->heightcm;
    }
}