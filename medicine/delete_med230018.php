<?php
    if(isset($_GET['id'])) {
        include "../connection_230018.php"; //call connection php mysql
    
        //sql query DELETE FROM WHERE
        $query = "DELETE FROM medicines_2320018 WHERE medId_230018 = '$_GET[id]'";

        //run query
        $delete = mysqli_query($db_connection, $query);

        if($delete) { 
            //echo "<p>Added succeefully!</p>"; //msg html ver
            echo "<script> alert('DELETE SUCCESSFULLY')</script>";
        } else {
            //echo "<p>Add pet failed!</p>";
            echo "<script> alert('DELETE FAILED')</script>"; //msg js ver
        }
    
    }
    ?>
    <!-- <p><a href="read_doc230018.php"> << back to pet list</a></p> -->
    <script>window.location.replace("read_med230018.php");</script>