<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="css/s1.css">
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration:none;color:white;">BLOOD BANK MANAGEMENT SYSTEM</a></h2></div>
            <div id="body" style="background-image:url('https://media.istockphoto.com/photos/blood-donation-concept-picture-id171149326?k=20&m=171149326&s=612x612&w=0&h=wwKIJJySYoqVsmy7OQ37nubtFr68KsL4Ffd614Yh7aw=');
            background-repeat:no-repeat; background-size:cover;">
                <br>
                <?php 
                $un=$_SESSION['un'];
                if(!$un)
                {
                    header("Location:index.php");
                }
                ?>
                <h1>Welcome Admin</h1><br><br>
                <ul>
                    <li><a href="donor-red.php">Donor Registration</a></li>
                    <li><a href="donor-list.php">Donor List</a></li>
                    <li><a href="stock-blood-list.php">Stock Blood List</a></li>
                </ul><br><br><br><br>
                <ul>
                    <li><a href="out-stock-blood-list.php">Out Stock Blood List</a></li> <!-- Wo blood jo pehle tha  -->
                    <li><a href="exchange-blood-list.php">Exchange Blood List</a></li>
                    <li><a href="ngo-list.php">NGO List</a></li>
                </ul>
                
            </div>
            <div id="footer"><h4 align="center">Copyright@AartiDevikar</h4></div>
            <p align="center"><a href="logout.php"><font color="black">Logout</font></a></p>
        </div>
    </div>
</body>
</html>