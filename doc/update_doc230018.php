<?php
session_start();
if (isset($_POST)) {
    include "../connection_230018.php"; //call connection php mysql  
    $docName = $_POST['docName_230018'];
    $docGender = $_POST['docGender_230018'];
    $docSpecialist = $_POST['docSpecialist_230018'];
    $docAdd = $_POST['docAdd_230018'];
    $docContact = $_POST['docContact_230018'];

    $query = "UPDATE doctors_230018 SET 
        docName_230018 = '$docName',
        docGender_230018 = '$docGender',
        docSpecialist_230018 = '$docSpecialist',
        docAdd_230018 = '$docAdd',
        docContact_230018 = '$docContact'
        WHERE doctorsId_230018 = '$_POST[doctorsId_230018]'";

    $update = mysqli_query($db_connection, $query);

    if ($update) {
        if (!empty($_FILES['new_photo230018']['name'])) {
            $folder = '../uploads/doctors/'; //target folder for upload
            if (move_uploaded_file($_FILES['new_photo230018']['tmp_name'], $folder . $_FILES['new_photo230018']['name'])) {

                $photo = $_FILES['new_photo230018']['name'];

                $query = "UPDATE doctors_230018 SET docPhoto_230018='$photo' WHERE doctorsId_230018='$_POST[doctorsId_230018]'";

                $upload = mysqli_query($db_connection, $query);

                if ($upload) {
                    if ($_POST['docPhoto_230018'] !== 'default.jpg') unlink($folder . $_POST['docPhoto_230018']); //delete old photos
                    echo "<script> alert('CHANGE SUCCESSED!');window.location.replace('read_doc230018.php');</script>";
                } else {
                    // echo "<script> alert('CHANGE FAILED!');window.location.replace('doc_photo230018.php?id='$_POST[doctorsId_230018]');</script>";
                }
                // echo "<script> alert('UPDATE SUCCESSFULLY')</script>";
            } else {
                // echo "<script> alert('UPDATE FAILED')</script>"; //msg js ver
            }
        }
    }
}
?>
<!-- <p><a href="read_doc230018.php"> << back to doctors list</a></p> -->
<!-- <script>window.location.replace("read_doc230018.php");</script> -->