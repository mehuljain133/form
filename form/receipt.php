<?php 
    require 'connectdb.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .order-table {
        margin: auto;
        text-align: center;
    }

    .order-table h1 {
        font-size: 2.6rem;
        color: orangered;
        margin: 0.5rem auto;
        margin-bottom: 0;
    }

    .order-table table {
        width: 100%;
        margin: 1% auto;
        background-color: antiquewhite;
        padding: 2rem;
        text-align: center;
    }

    .order-table table tr th {
        font-size: 1.4rem;
        font-weight: bold;

    }

    .order-table table tr td {
        font-size: 2rem;
    }

    .order-table table tr td img {
        width: 100px;
        height: 100px;
    }

    @media only screen and (max-width: 600px) {
        .order-table h1 {
            font-size: 4rem;
        }

        .order-table table tr th {
            font-size: 0.10rem;
        }

        .order-table table tr td {
            font-size: 0.10rem;
        }
    }

    @media only screen and (max-width: 400px) {
        .order-table table {
            width: 90%;
            margin: 2% auto;
            padding: 0.5rem;
        }

        .order-table h1 {
            font-size: 1.6rem;
        }

        .order-table table tr th {
            font-size: 0.8rem;
        }

        .order-table table tr td {
            font-size: 0.2rem;
        }

        .order-table table tr td img {
            width: 50px;
            height: 50px;
        }
    }
    </style>

</head>

<body>

    <?php  
            echo '<div class="order-table">
                <h1>Receipts</h1>
                <table>';
                    echo '<tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>D.O.B</th>
                            <th>About</th>
                            <th>Receipt</th>
                            <th>Date</th>
                        </tr>';
               
                        $sql  = "SELECT * FROM `formdata`";
                        $result = mysqli_query($conn, $sql);

                        $num = mysqli_num_rows($result);

                        if($num > 0)
                        {
                            while($row = mysqli_fetch_assoc($result)){
                                    echo '<tr>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['dob'].'</td>
                                            <td>'.$row['about'].'</td>
                                            <td>'.$row['receiptno.'].'</td>
                                            <td>'.$row['date'].'</td>
                                        </tr>';
                            }
                        }
                    echo '</table>
                    </div>';
            ?>


</body>

</html>