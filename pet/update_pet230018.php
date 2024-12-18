<h1>halooo</h1>
<?php
    if(isset($_POST)) {
        include "../connection_230018.php"; //call connection php mysql
    
        //sql query UPDATE SET WHERE
        $query = "UPDATE pets_230018 SET 
        petName_230018 = '$_POST[petName_230018]',
        petType_230018 = '$_POST[petType_230018]',
        petGender_230018 = '$_POST[petGender_230018]',
        petAge_230018 = '$_POST[petAge_230018]',
        petOwn_230018 = '$_POST[petOwn_230018]',
        petAdd_230018 = '$_POST[petAdd_230018]',
        petPhone_230018 = '$_POST[petPhone_230018]'
        WHERE petId_230018 = '$_POST[petId_230018]' ";

        //run query
        $update = mysqli_query($db_connection, $query);

        if($update) { 
            //echo "<p>Added succeefully!</p>"; //msg html ver
            echo "<script> alert('UPDATE SUCCESSFULLY')</script>";
        } else {
            //echo "<p>Add pet failed!</p>";
            echo "<script> alert('UPDATE PET FAILED')</script>"; //msg js ver
        }
    
    }
    ?>
    <!-- <p><a href="read_pet230018.php"> << back to pet list</a></p> -->
    <script>window.location.replace("read_pet230018.php");</script>