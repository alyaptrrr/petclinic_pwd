<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script> alert('PLEASE LOGIN FIRST!');window.location.replace('../login/form_login230018.php');</script>";
}
if($_SESSION['userType'] != 'Manager') {
    echo "<script> alert('ACCESS FORBIDDEN!');window.location.replace('../index.php');</script>";
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
    <h1>Alys Pet Clinic</h1>
    <hr>
    <h3>Form Add User</h3>
    <form method="post" action="create_user230018.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="userName_230018" required></td>
            </tr>
            <tr>
                <td>Usertype</td>
                <td>
                    <input type="radio" name="userType_230018" value="Manager" required>Manager |
                    <input type="radio" name="userType_230018" value="Staff" required> Staff
                </td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><input name="fullname_230018" required></input></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
        </table>
    </form>
    <a href="read_user230018.php"> << Back To List</a>
</body>
</html>