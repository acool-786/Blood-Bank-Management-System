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
                <h1>Donor Registration</h1>
                <center><div id="form">
                    <table>
                        <tr>
                            <td><center><b><font color="yellow">Name</font></b></center></td>
                            <td><center><b><font color="yellow">Father's Name</font></b></center></td>
                            <td><center><b><font color="yellow">Address</font></b></center></td>
                            <td><center><b><font color="yellow">City</font></b></center></td>
                            <td><center><b><font color="yellow">Age</font></b></center></td>
                            <td><center><b><font color="yellow">Blood Group</font></b></center></td>
                            <td><center><b><font color="yellow">Email</font></b></center></td>
                            <td><center><b><font color="yellow">Mobile No.</font></b></center></td>
                        </tr>
                        <?php
                        $q=$db->query("SELECT * FROM donor_registration");
                        // For fetching data
                        while($r1=$q->fetch(PDO::FETCH_OBJ))
                        {
                            ?>
                            <tr>
                            <td><center><?= $r1->name; ?></center></td>
                            <td><center><?= $r1->fname; ?></center></td>
                            <td><center><?= $r1->address; ?></center></td>
                            <td><center><?= $r1->city; ?></center></td>
                            <td><center><?= $r1->age; ?></center></td>
                            <td><center><?= $r1->bgroup; ?></center></td>
                            <td><center><?= $r1->email; ?></center></td>
                            <td><center><?= $r1->mno; ?></center></td>
                        </tr>
                            <?php
                        }
                        
                        ?>
                        
                    </table>

                </div></center>
                
                
            </div>
            <div id="footer"><h4 align="center">Copyright@AartiDevikar</h4></div>
            <p align="center"><a href="logout.php"><font color="black">Logout</font></a></p>
        </div>
    </div>
</body>
</html>