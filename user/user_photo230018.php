<?php
session_start();
if(isset($_POST['upload'])) 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic</title>
</head>
<body>
    <h1>Alys Pet Clinic</h1><hr>
    <h3>Change Pet Photo</h3>
    <?php
        //call connection 
        include "../connection_230018.php";
    ?>
    <form method="post" action="user_upload230018.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td></td>
                <td><img src="../uploads/users/<?=$_SESSION['userPhoto']?>" width="100" height="100" style="border-radius: 100%;"></td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo230018" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="UPLOAD" />
                </td>
            </tr>
        </table>
    </form>
    <p><a href="../index.php"><< Back Home</a></p>
</body>
</html>