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
            <div id="header"><h2 align="center">BLOOD BANK MANAGEMENT SYSTEM</h2></div>
            <div id="body" style="background-image:url('https://media.istockphoto.com/photos/patient-donating-blood-at-hospital-picture-id1266746907?k=20&m=1266746907&s=612x612&w=0&h=iMOSTZaq_L08HGf8MWA3ZiNcBtAntxaN-JC23rAmHFw='); background-position:center; background-size:cover;">
                <br><br><br><br><br>
                <form action="" method="post">
                <table align="center">
                    <tr>
                        <td width="200px" height="70px"><b>Enter Username:</b></td>
                        <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username" style="width:180px ; height:30px;border-radius:10px;"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="70px"><b>Enter Password:</b></td>
                        <td width="200px" height="70px"><input type="text" name="ps" placeholder="Enter Password" style="width:180px ; height:30px;border-radius:10px;"></td>
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" name="sub" value="Login" style="width:70px;height:30px;border-radius:5px;"></td>
                    </tr>
                </table>
                </form>
                <?php
                if(isset($_POST['sub']))
                {
                    $un=$_POST['un'];
                    $ps=$_POST['ps'];
                    $q=$db->prepare("SELECT * FROM admin WHERE uname='$un' AND pass='$ps'" );
                    $q->execute();
                    $res=$q->fetchAll(PDO::FETCH_OBJ);
                    if($res)
                    {
                        $_SESSION['un']=$un;
                        header("Location:admin-home.php");
                    }
                    else
                    {
                        echo "<script>alert('Wrong User')</script>";
                    }
                } 
                ?>
            </div>
            <div id="footer"><h4 align="center">Copyright@AartiDevikar</h4></div>
        </div>
    </div>
</body>
</html>