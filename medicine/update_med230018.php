<h1>halooo</h1>
<?php
    if(isset($_POST)) {
        include "../connection_230018.php"; //call connection php mysql
    
        //sql query UPDATE SET WHERE
        $query = "UPDATE medicines_2320018 SET 
        medName_230018 = '$_POST[medName_230018]',
        medType_230018 = '$_POST[medType_230018]',
        medUnit_230018 = '$_POST[medUnit_230018]',
        medPrice_230018 = '$_POST[medPrice_230018]',
        medDescription_230018 = '$_POST[medDescription_230018]'
        WHERE medId_230018 = '$_POST[medId_230018]';
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
    <!-- <p><a href="read_doc230018.php"> << back to doctors list</a></p> -->
    <script>window.location.replace("read_med230018.php");</script>