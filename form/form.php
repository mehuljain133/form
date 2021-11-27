<?php 
    session_start();

    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "phpform";

    //creating a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $about = $_POST['about'];
        $captcha = $_POST['captcha'];
        $receiptno = rand(0, 99999);

        if($_SESSION['captcha'] != $captcha)
        {
            echo "Incorrect Captcha! Please Try Again";
        }
        else{
            $query = "INSERT INTO `formdata` (`name`, `email`, `dob`, `about`, `receiptno.`, `date`) VALUES ('$name', '$email', '$dob', '$about', '$receiptno' ,current_timestamp());";
    
            $runQuery = mysqli_query($conn, $query);
    
            if($runQuery)
            {
                echo "Form Submitted successfully";
            }
			else
			{
				echo "Form unsuccessful"
			}
        }
    }

?>