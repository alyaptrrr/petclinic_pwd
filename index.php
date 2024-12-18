<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script> alert('PLEASE LOGIN FIRST!');window.location.replace('login/form_login230018.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic</title>
</head>
<body>
    <h1>Alya Pet Clinic</h1><hr>
    <h3>choose here</h3>
    <ul>
        <li><a href="doc/read_doc230018.php"> Doctors List</a></li>
        <li><a href="pet/read_pet230018.php"> Pet List</a></li>
        <?php if($_SESSION['userType']=='Manager') { ?>
        <li><a href="user/read_user230018.php"> User List</a></li>
        <li><a href="report/report.php">Monthly Report</a></li><?php } ?>
        <hr>
        <p>Welcome, <?=$_SESSION['fullname'];?> youe are login as <?=$_SESSION['userType'];?></p>

        <img src="uploads/users/<?=$_SESSION['userPhoto']?>" width="100" height="100" style="border-radius: 100%;"><br>
        <a href="user/user_photo230018.php"> Change Photo</a>
        <li><a href="pass/change_password230018.php"> Change Password</a></li>
        <li><a href="login/logout_230018.php"> Logout</a></li>
    </ul>
</body>
</html>