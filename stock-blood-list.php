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
    <title>Donor Registration</title>
    <link rel="stylesheet" href="css/s1.css">
    <style>
        td{
            width: 200px;
            height: 40px;
        }
    </style>
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration:none;color:white;">BLOOD BANK MANAGEMENT SYSTEM</a></h2></div>
            <div id="body">
                <br>
                <?php 
                $un=$_SESSION['un'];
                if(!$un)
                {
                    header("Location:index.php");
                }
                ?>
                <h1>Stock Blood List</h1>
                <center><div id="form">
                    <table>
                        <tr>
                            <td><center><b><font color="yellow">Name</font></b></center></td>
                            <td><center><b><font color="yellow">Qty</font></b></center></td>
                            
                        </tr>
                            <tr>
                            <td><center>O+</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>  
                        </tr>
                        </tr>
                            <tr>
                            <td><center>O-</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>  
                        </tr>
                        </tr>
                            <tr>
                            <td><center>A+</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>  
                        </tr>
                        </tr>
                            <tr>
                            <td><center>A-</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>  
                        </tr>
                            <tr>
                            <td><center>B+</center></td>
                            <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
                            echo $row=$q->rowcount();
                            ?>
                            </center></td>  
                        </tr>
                            <tr>
                            <td><center>B-</center></td>
                            <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
                            echo $row=$q->rowcount();
                            ?>
                            </center></td>  
                        </tr>
                        </tr>
                            <tr>
                            <td><center>AB+</center></td>
                            <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                            echo $row=$q->rowcount();
                            ?>
                            </center></td>  
                        </tr>
                        </tr>
                            <tr>
                            <td><center>AB-</center></td>
                            <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                            echo $row=$q->rowcount();
                            ?>
                            </center></td>  
                        </tr>
   
                        
                    </table>

                </div></center>
                
                
            </div>
            <div id="footer"><h4 align="center">Copyright@AartiDevikar</h4></div>
            <p align="center"><a href="logout.php"><font color="black">Logout</font></a></p>
        </div>
    </div>
</body>
</html>