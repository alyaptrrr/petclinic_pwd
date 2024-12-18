<?php
session_start();
if(isset($_POST['upload'])) {
    include "../connection_230018.php";

    $folder ='../uploads/users/'; //target folder for upload
    $photo = $_FILES['new_photo230018']['name'];
    if(move_uploaded_file($_FILES['new_photo230018']['tmp_name'], $folder . $photo)) {

        $query="UPDATE user_230018 SET userPhoto_230018='$photo' WHERE userId_230018='$_SESSION[userId]'";

        $upload=mysqli_query($db_connection, $query);

        if($upload) {
            if($_SESSION['userPhoto'] !== 'default.jpg') {
            unlink($folder . $_SESSION['userPhoto']); //delete old photos
            }

            $_SESSION['userPhoto'] = $photo;

            echo "<script> alert('CHANGE SUCCESSED!');window.location.replace('user_photo230018.php');</script>";
        } else { 
            echo "<script> alert('CHANGE FAILED!');window.location.replace('user_photo230018.php');</script>";
        }
        //upload failed
    } else { 
        echo "<script> alert('UPLOAD FAILED!');window.location.replace('user_photo230018.php');</script>";
    }
}
?>