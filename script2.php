<?php
//get base64 image
//resize it for social sharing
// save
try
{
    require "SimpleImage.php";
    define('UPLOAD_DIR', 'images/');
    $file  = UPLOAD_DIR . uniqid() . '.png';
    //resize the image for sharing
    $image = new \claviska\SimpleImage();
    $image->fromDataUri($_POST['img']);
    $image->resize(600, 300);
    $image->toFile($file);
    print 'success';
} catch( Exception $ex )
{
    print $err->getMessage();
}
?>