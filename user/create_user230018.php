<h1>halooo</h1>
<?php

if(isset($_POST)) {
    include "../connection_230018.php"; //call connection php mysql

    //create default password 
    $password = password_hash($_POST['userType_230018'], PASSWORD_DEFAULT);

    //sql query INSERT INTO VALUES
    $query = "INSERT INTO user_230018 (userName_230018, pass_230018,
    userType_230018, fullname_230018) VALUES ('$_POST[userName_230018]', 
    '$password', '$_POST[userType_230018]', '$_POST[fullname_230018]')";

    //run query
    $create = mysqli_query($db_connection, $query);

    if($create) { 
        //echo "<p>Added succeefully!</p>"; //msg html ver
        echo "<script> alert('ADDED SUCCESSFULLY!!')</script>";
    } else {
        //echo "<p>Add pet failed!</p>";
        echo "<script> alert('ADD USER FAILED!')</script>"; //msg js ver
    }

}
?>
<!-- <p><a href="read_user230018.php"> << back to usertors list</a></p> -->
<script>window.location.replace("read_user230018.php");</script>