<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <?php
    function calculateArea($width, $height) {
        return $width * $height;
    }

    
    $width = 6;
    $height = 3;
    
   
    $area = calculateArea($width, $height);
    
   
    echo "The area of a rectangle with a width of {$width} and {$height} is {$area}";
    ?>
</body>
</html> 
