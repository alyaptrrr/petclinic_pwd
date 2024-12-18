<?php
if (isset($_POST['upload'])) {
    include "../connection_230018.php";

    $folder = '../uploads/pets/'; //target folder for upload
    if (move_uploaded_file($_FILES['new_photo230018']['tmp_name'], $folder . $_FILES['new_photo230018']['name'])) {

        //success upload, get thte photo name
        $photo = $_FILES['new_photo230018']['name'];

        $query = "UPDATE pets_230018 SET petPhoto_230018='$photo' WHERE petId_230018='$_POST[petId_230018]'";

        $upload = mysqli_query($db_connection, $query);

        if ($upload) {
            if ($_POST['petPhoto_230018'] !== 'default.jpg') unlink($folder . $_POST['petPhoto_230018']); //delete old photos
            echo "<script> alert('CHANGE SUCCESSED!');window.location.replace('read_pet230018.php');</script>";
        } else {
            echo "<script> alert('CHANGE FAILED!');window.location.replace('pet_photo230018.php?id='$_POST[petId_230018]');</script>";
        }
        //upload failed
    } else {
        echo "<script> alert('UPLOAD FAILED!');window.location.replace('pet_photo230018.php?id='$_POST[petId_230018]');</script>";
    }
}
