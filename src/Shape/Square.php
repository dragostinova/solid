<?php

namespace SOLID\Shape;

/**
 * Regarding Single-responsibility Principle the Square object is responsible only for one job
 * It depends only on one interface, because it has only area.
 */
class Square implements ShapeInterface
{
    protected $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function calculateArea(): float
    {
        return pow($this->side, 2);
    }
}
