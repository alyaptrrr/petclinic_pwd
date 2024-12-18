<?php
if (isset($_POST['save'])) { //check variable POST from FORM
    include '../connection_230018.php'; //call connection

    //sq; query INSERT INTO SET
    $query = "INSERT INTO `medicals_230018` SET 
              petId_230018 = '$_POST[petId_230018]',
              doctorsId_230018 = '$_POST[doctorsId_230018]',
              symptom_230018 = '$_POST[symptom_230018]',
              diagnose_230018 = '$_POST[diagnose_230018]',
              treatment_230018 = '$_POST[treatment_230018]',
              cost_230018 = '$_POST[cost_230018]'";

    //run query
    $create = mysqli_query($db_connection, $query);

    if($create) { //if query TRUE
        //echo "<p>Added succeefully!</p>"; //msg html ver
        echo "<script> alert('ADDED SUCCESSFULLY!!')</script>";
    } else {
        //echo "<p>Add pet failed!</p>";
        echo "<script> alert('ADDED FAILED!')</script>"; //msg js ver
    }

}
?>
<!-- <p><a href="read_doc230018.php"> << back to doctors list</a></p> -->
<script>window.location.replace("medicals_230018.php?petId=<?=$_POST['petId_230018'];?>");</script>