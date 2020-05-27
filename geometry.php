<?php

$values1 = array(
            150,  25,  // Point 1 (x, y)
            125,  0, // Point 2 (x, y)
            100,  25
            );

$values2 = array(
            50,  200,  
            25,  175, 
            0,  200
            );

$values3 = array(
            250,  200,  
            225,  170, 
            200,  200
            );



// create image
$image = imagecreatetruecolor(250, 250);

// allocate colors
$bg   = imagecolorallocate($image, 0, 0, 0);
$blue = imagecolorallocate($image, 0, 0, 255);

// fill the background
imagefilledrectangle($image, 0, 0, 249, 249, $bg);

// draw a polygon
imagefilledpolygon($image, $values1, 3, $blue);
imagefilledpolygon($image, $values2, 3, $blue);
imagefilledpolygon($image, $values3, 3, $blue);

imageline($image, 125,20,225,200, $blue);
imageline($image, 125,20,25,200, $blue);
imageline($image, 225,190,25,190, $blue);

// flush image
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);