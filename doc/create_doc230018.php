<h1>halooo</h1>
<?php
    // echo $_POST['docName_230018'] . "<br>";
    // echo $_POST['docGender_230018'] . "<br>";
    // echo $_POST['docAdd_230018'] . "<br>";
    // echo $_POST['docContact_230018'] . "<br>";

if(isset($_POST)) {
    include "../connection_230018.php"; //call connection php mysql

    //sql query INSERT INTO VALUES
    $query = "INSERT INTO doctors_230018 (docName_230018, docGender_230018,
    docSpecialist_230018,docAdd_230018, docContact_230018) VALUES ('$_POST[docName_230018]',
    '$_POST[docGender_230018]', '$_POST[docSpecialist_230018]', '$_POST[docAdd_230018]', 
    '$_POST[docContact_230018]')";

    //run query
    $create = mysqli_query($db_connection, $query);

    if($create) { 
        //echo "<p>Added succeefully!</p>"; //msg html ver
        echo "<script> alert('ADDED SUCCESSFULLY!!')</script>";
    } else {
        //echo "<p>Add pet failed!</p>";
        echo "<script> alert('ADD DOCTORS FAILED!')</script>"; //msg js ver
    }

}
?>
<!-- <p><a href="read_doc230018.php"> << back to doctors list</a></p> -->
<script>window.location.replace("read_doc230018.php");</script>