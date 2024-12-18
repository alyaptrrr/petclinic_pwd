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

        $querydoc="SELECT * FROM doctors_230018";

        $doctors=mysqli_query($db_connection, $querydoc);
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
    <form method="post" action="create_medicals230018.php">
        <table>
            <tr>
                <td>Doctor</td>
                <td>
                    <select name="doctorsId_230018" required>
                        <option value="">choose</option>
                        <?php foreach($doctors as $data2) : ?>
                        <option value="<?=$data2['doctorsId_230018']?>"><?=$data2['docName_230018']?></option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Symptom</td>
                <td><textarea name="symptom_230018" required></textarea></td>
            </tr>
            <tr>
                <td>Diagnose</td>
                <td><textarea name="diagnose_230018" required></textarea></td>
            </tr>
            <tr>
                <td>Treatment</td>
                <td><textarea name="treatment_230018" required></textarea></td>
            </tr>
            <tr>
                <td>Cost ($)</td>
                <td><input type="number" name="cost_230018" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="petId_230018" value="<?=$data1['petId_230018']?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="medicals_230018.php?petId=<?=$data1['petId_230018']?>">Back to Pet List</a></p>
</body>
</html>