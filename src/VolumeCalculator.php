<?php

namespace SOLID;

use SOLID\Shape\SolidShapeInterface;

/**
 * Regarding Single-responsibility principle, VolumeCalculator is responsible only for one thing -
 * to calculate volume of provided shapes
 *
 * Regarding Liskov substitution principle, every subclass should be substitutable for their parent class.
 * So VolumeCalculator should be substitutable for AreaCalculator.
 */
class VolumeCalculator extends AreaCalculator
{
    /**
     * @var array
     */
    protected $shapes = [];

    /**
     * Sum all volumes
     *
     * @return float
     */
    public function calculateSumVolumes(): float
    {
        $areas = [];

        foreach ($this->shapes as $shape) {
            // Check shape interface. Only Solid shapes have volume
            if ($shape instanceof SolidShapeInterface) {
                $areas[] = $this->calculateVolume($shape);
            }
        }

        return array_sum($areas);
    }

    /**
     * Each shape has its own formula for calculating volume.
     * So instead adding each formula for every one shape here,
     * the shape object will be responsible for that calculation.
     * Use SolidShapeInterface as type hint instead of the actual
     * object (Sphere).
     *
     * @param SolidShapeInterface $shape
     * @return float
     */
    private function calculateVolume(SolidShapeInterface $shape): float
    {
        // Shape object will calculate its own volume
        return $shape->calculateVolume();
    }
}
