<?php
// Function to calculate rectangle area
function calculateArea($length, $width) {
    return $length * $width;
}

// Example usage
$length = 4;
$width = 2;
$area = calculateArea($length, $width);

echo "<b>The area of a rectangle with a width of " . $length . " and " . $width . " is " . $area . "</b>";
?>