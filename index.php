<?php

namespace SOLID;

use SOLID\Shape\{Circle, Square, Sphere};
use SOLID\Output\{JsonOutput, HtmlOutput};

include 'vendor/autoload.php';

// Adding shapes to the calculator
$calculator = new AreaCalculator();
$calculator->addShape(new Circle(2));
$calculator->addShape(new Circle(4));
$calculator->addShape(new Square(4));

// Claculate sum of all areas
$sum = $calculator->calculateSumAreas();
$result = ['sumArea' => number_format($sum, 2)];

// Render the result in json format
$output = new CalculatorOutputter(new JsonOutput());
echo $output->render($result);


// Adding solid shapes to the calculator
$calculator = new VolumeCalculator();
$calculator->addShape(new Sphere(8));
$calculator->addShape(new Sphere(4));

// Claculate sum of all volumes
$sum = $calculator->calculateSumAreas();
$result = ['sumVolume' => number_format($sum, 2)];

// Render the result in html format
$output = new CalculatorOutputter(new HtmlOutput());
echo $output->render($result);
