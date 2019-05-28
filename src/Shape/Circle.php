<?php

namespace SOLID\Shape;

/**
 * Regarding Single-responsibility Principle the Circle object is responsible only for one job.
 *
 * Regarding Interface segregation principle, it should depend only on one interface, because it has only area.
 */
class Circle implements ShapeInterface
{
    /**
     * @var float
     */
    protected $radius;

    /**
     * Setup the required parameters
     *
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * Calculate area of a circle
     *
     * @param float $radius
     */
    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}
