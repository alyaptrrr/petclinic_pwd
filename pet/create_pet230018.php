<h1>halooo</h1>
<?php
    // echo $_POST['petName_230018'] . "<br>";
    // echo $_POST['petType_230018'] . "<br>";
    // echo $_POST['petGender_230018'] . "<br>";
    // echo $_POST['petAge_230018'] . "<br>";
    // echo $_POST['petOwn_230018'] . "<br>";
    // echo $_POST['petAdd_230018'] . "<br>";
    // echo $_POST['petPhone_230018'] . "<br>";

    if(isset($_POST)) {
        include "../connection_230018.php"; //call connection php mysql
    
        //sql query INSERT INTO VALUES
        $query = "INSERT INTO pets_230018 (petName_230018, petType_230018,
        petGender_230018, petAge_230018, petOwn_230018, petAdd_230018, 
        petPhone_230018) VALUES ('$_POST[petName_230018]', '$_POST[petType_230018]', 
        '$_POST[petGender_230018]', '$_POST[petAge_230018]', 
        '$_POST[petOwn_230018]', '$_POST[petAdd_230018]', '$_POST[petPhone_230018]')";

        //run query
        $create = mysqli_query($db_connection, $query);

        if($create) { 
            //echo "<p>Added succeefully!</p>"; //msg html ver
            echo "<script> alert('ADDED SUCCESSFULLY')</script>";
        } else {
            //echo "<p>Add pet failed!</p>";
            echo "<script> alert('ADD PET FAILED')</script>"; //msg js ver
        }
    
    }
    ?>
    <!-- <p><a href="read_pet230018.php"> << back to pet list</a></p> -->
    <script>window.location.replace("read_pet230018.php");</script>