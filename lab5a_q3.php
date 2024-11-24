<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Rectangle Area</title>
</head>
<body>
    <?php
    // Define the function to calculate the area of a rectangle
    function calculateArea($length, $width) {
        return $length * $width;
    }

    // Call the function with the given values
    $length = 8; // Example length
    $width = 7;  // Example width
    $area = calculateArea($length, $width);

    // Display the result in the required format
    echo "The area of a rectangle with a width of $width and $length is $area.";
    ?>
</body>
</html>
