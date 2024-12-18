<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic</title>
</head>
<body>
    <h1>Alys Pet Clinic</h1>
    <hr>
    <h3>Medical Records</h3>
    <?php
        //call connection
        include "../connection_230018.php";

        //make query SELECT
        $querypet="SELECT * FROM pets_230018 WHERE petId_230018='$_GET[petId]'";

        $pet=mysqli_query($db_connection, $querypet);
        
        //extract data from query result
        $data1=mysqli_fetch_assoc($pet);

        // query one table
        //$querymed="SELECT * FROM medicals_230018 WHERE petId_230018='$_GET[petId]'";
        
        //query two table
        $querymed="SELECT * FROM medicals_230018 AS m, doctors_230018 AS d WHERE m.petId_230018='$_GET[petId]' 
        AND m.doctorsId_230018 = d.doctorsId_230018";

        $medicals=mysqli_query($db_connection, $querymed);
    ?>
    <table>
        <tr>
            <td>Pet Id/Name</td>
            <td>: <?=$data1['petId_230018']?> / <?=$data1['petName_230018']?></td>
        </tr>
        <tr>
            <td>Pet Type/Gender/Age</td>
            <td>: <?=$data1['petType_230018']?> / <?=$data1['petGender_230018']?> / <?=$data1['petAge_230018']?></td>
        </tr>
        <tr>
            <td>Owner</td>
            <td>: <?=$data1['petOwn_230018']?> / <?=$data1['petAdd_230018']?> / <?=$data1['petPhone_230018']?></td>
        </tr>
    </table>
    <hr>
    <p><a href="add_medicals230018.php?petId=<?=$data1['petId_230018']?>">Add New Records</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Doctor</th>
            <th>Symptom</th>
            <th>Diagnose</th>
            <th>Treatment</th>
            <th>Cost ($)</th>
        </tr>

        <!-- loop if the data not empty -->
         <?php
            if(mysqli_num_rows($medicals) > 0) {
                $i=1;
                foreach($medicals as $data2) : 
         ?>
        <tr>
           <td><?=$i++?></td>
           <td><?=date('D, d M Y H:i:s', strtotime($data2['mrDate_230018']))?></td>
           <td><?=$data2['docName_230018']?></td>
           <td><?=$data2['symptom_230018']?></td>
           <td><?=$data2['diagnose_230018']?></td>
           <td><?=$data2['treatment_230018']?></td>
           <td><?=$data2['cost_230018']?></td>
        </tr>
        <?php
            endforeach;
        } else{
        ?>

        <!-- will show if the data empty --> 
        <tr><td colspan="7" align='center'>No Record!</td></tr>
        <?php } ?>

    </table>
    <p><a href="../pet/read_pet230018.php">Back to Pet List</a></p>
</body>
</html>