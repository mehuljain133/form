// copied from internet
<?php 
    session_start();

    $rand_num = rand(111111,999999);
    $_SESSION['captcha'] = $rand_num;

    // Create the size of image or blank image
    $image = imagecreate(100, 35);
    
    // Set the background color of image
    $background_color = imagecolorallocate($image, 248, 237, 237);
    
    // Set the text color of image
    $text_color = imagecolorallocate($image, 0, 0, 0);

    // Function to create image which contains string.
    imagestring($image, 10, 25, 12, $_SESSION['captcha'] , $text_color);
    
    header("Content-Type: image/jpeg");
    
    imagejpeg($image);
?>