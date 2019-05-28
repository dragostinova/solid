<?php

namespace SOLID\Shape;

/**
 * Regarding Single-responsibility Principle the Sphere object is responsible only for jobs related to sphere.
 *
 * Regarding Interface segregation principle, it should depend on 2 interfaces, because it has area and volume.
 */
class Sphere implements ShapeInterface, SolidShapeInterface
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
     * Calculate area of a sphere
     *
     * @param float $radius
     */
    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    /**
     * Calculate volume of a sphere
     *
     * @param float $radius
     */
    public function calculateVolume(): float
    {
        return 4 * pi() * pow($this->radius, 2);
    }
}
