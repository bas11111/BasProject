<?php

namespace models\furniture;

abstract class House
{
    protected int $lengthcm;
    protected int $widthcm;
    protected int $heightcm;

    public function __construct(int $lengthcm, int $widthcm, int $heightcm)
    {
        $this->lengthcm = $lengthcm;
        $this->widthcm = $widthcm;
        $this->heightcm = $heightcm;
    }

    public function getHeight()
    {
        return $this->heightcm;
    }

    public function getWidth()
    {
        return $this->widthcm;
    }

    public function getLength()
    {
        return $this->lengthcm;
    }

    public function setHeight(int $heightcm)
    {
        $this->heightcm = $heightcm;
    }

    public function setWidth(int $widthcm)
    {
        $this->widthcm = $widthcm;
    }
    public function setLength($lengthcm)
    {
        $this->lengthcm = $lengthcm;
    }
}