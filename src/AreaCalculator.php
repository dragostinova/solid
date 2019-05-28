<?php

namespace SOLID;

use SOLID\Shape\ShapeInterface;

/**
 * Regarding Single-responsibility principle, AreaCalculator is responsible only for one thing -
 * to calculate area of provided shapes
 *
 * Regarding Open-closed principle, AreaCalculator is open for extension, but closed for modification.
 * So adding volume calculation will be in another object (VolumeCalculator), that will extend AreaCalculator.
 */
class AreaCalculator
{
    /**
     * @var array
     */
    protected $shapes = [];

    /**
     * Adding shapes dynamically
     *
     * @param ShapeInterface $shape
     */
    public function addShape(ShapeInterface $shape)
    {
        $this->shapes[] = $shape;
    }

    /**
     * Sum all areas
     *
     * @return float
     */
    public function calculateSumAreas(): float
    {
        $areas = [];

        foreach ($this->shapes as $shape) {
            // All added shapes should be instance of ShapeInterface "addShape(ShapeInterface $shape)"
            // if ($shape instanceof ShapeInterface) {
                $areas[] = $this->calculateArea($shape);
            // }
        }

        return array_sum($areas);
    }

    /**
     * Each shape has its own formula for calculating area.
     * So instead adding each formula for every one shape here, the shape will be responsible for that calculation.
     *
     * @param ShapeInterface $shape
     * @return mixed
     */
    private function calculateArea(ShapeInterface $shape): float
    {
        return $shape->calculateArea();
    }
}
