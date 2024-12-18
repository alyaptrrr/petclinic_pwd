<?php
    if(isset($_POST)) {
        include "../connection_230018.php"; //call connection php mysql
    
        //sql query UPDATE SET WHERE
        $query = "UPDATE user_230018 SET 
        userName_230018 = '$_POST[userName_230018]',
        userType_230018 = '$_POST[userType_230018]',
        fullname_230018 = '$_POST[fullname_230018]'
        WHERE userId_230018 = '$_POST[userId_230018]';
        ";

        //run query
        $update = mysqli_query($db_connection, $query);

        if($update) { 
            //echo "<p>Added succeefully!</p>"; //msg html ver
            echo "<script> alert('UPDATE SUCCESSFULLY')</script>";
        } else {
            //echo "<p>Add pet failed!</p>";
            echo "<script> alert('UPDATE FAILED')</script>"; //msg js ver
        }
    
    }
    ?>
    <!-- <p><a href="read_user230018.php"> << back to usertors list</a></p> -->
    <script>window.location.replace("read_user230018.php");</script>