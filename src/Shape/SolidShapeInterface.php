<?php

namespace SOLID\Shape;

/**
 * Regarding Interface segregation principle the Shapes objects should never be forced
 * to implement an interface that they don't use. Some of the shapes have volume,
 * others have only area. So the ShapeInterface will be separate into 2 interfaces:
 * ShapeInterface and SolidShapeInterface
 */
interface SolidShapeInterface
{
    public function calculateVolume(): float;
}
