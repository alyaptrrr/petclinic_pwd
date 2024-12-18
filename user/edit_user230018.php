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
    <title>user Clinic</title>
</head>
<body>
    <h1>Alys Pet Clinic</h1>
    <hr>
    <h3>Form Edit User</h3>
    <?php
        //call connection
        include "../connection_230018.php";

        //make query SELECT
        $query="SELECT * FROM user_230018 WHERE userId_230018='$_GET[id]'";

        $user=mysqli_query($db_connection, $query);
        
        //extract data from query result
        $data=mysqli_fetch_assoc($user);
    ?>
    <form method="post" action="update_user230018.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="userName_230018" value="<?=$data['userName_230018']?>" required></td>
            </tr>
            <tr>
            <td>Usertype</td>
                <td>
                    <input type="radio" name="userType_230018" value="Manager" <?=($data['userType_230018']=='Manager')?'checked':'';?> required>Manager |
                    <input type="radio" name="userType_230018" value="Staff" <?=($data['userType_230018']=='Staff')?'checked':'';?> required> Staff
                </td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><input name="fullname_230018" value="<?=$data['fullname_230018']?>" required></input></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="userId_230018" value="<?=$data['userId_230018']?>">
                </td>
            </tr>
        </table>
    </form>   
    <a href="read_user230018.php"> << Back To List</a>
</body>
</html>