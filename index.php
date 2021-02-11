<!DOCTYPE html>
<html>
<body>

<?php
 
// Generate image.
$im = imagecreatetruecolor(255, 255);
 
// Create a colour.
$white = imagecolorallocate($im, 0, 0, 0);
 
// Draw a cirlce in the middle of the image.
imageellipse($im, 128, 128, 200, 200, $white);
 
// Save the image to a file.
imagepng($im, 'circle.png');
 
// Destroy the image handler.
imagedestroy($im);
?>

</body>
</html>
