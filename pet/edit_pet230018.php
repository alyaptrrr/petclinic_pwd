<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script> alert('PLEASE LOGIN FIRST!');window.location.replace('../login/form_login230018.php');</script>";
}
?>
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
    <h3>Form Edit Pet</h3>
    <?php
        //call connection
        include "../connection_230018.php";

        //make query SELECT
        $query="SELECT * FROM pets_230018 WHERE petId_230018='$_GET[id]'";

        $pet=mysqli_query($db_connection, $query);
        
        //extract data from query result
        $data=mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_pet230018.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="petName_230018" value="<?=$data['petName_230018']?>" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="petType_230018" id="" required>
                        <option value="">choose</option>
                        <option value="Cat" <?=($data['petType_230018']=='Cat')?'selected':'';?>>Cat</option>
                        <option value="Dog" <?=($data['petType_230018']=='Dog')?'selected':'';?>>Dog</option>
                        <option value="Reptil" <?=($data['petType_230018']=='Reptil')?'selected':'';?>>Reptil</option>
                        <option value="Bird" <?=($data['petType_230018']=='Bird')?'selected':'';?>>Bird</option>
                        <option value="Rodent" <?=($data['petType_230018']=='Rodent')?'selected':'';?>>Rodent</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="petGender_230018" value="Male" <?=($data['petGender_230018']=='Male')?'checked':'';?> required>Male |
                    <input type="radio" name="petGender_230018" value="Female" <?=($data['petGender_230018']=='Female')?'checked':'';?> required> Female
                </td>
            </tr>
            <tr>
                <td>Age (month)</td>
                <td><input type="number" name="petAge_230018" value="<?=$data['petAge_230018']?>" required></td>
            </tr>
            <tr>
                <td>Owner</td>
                <td><input type="text" name="petOwn_230018" value="<?=$data['petOwn_230018']?>" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="petAdd_230018" required><?=$data['petAdd_230018']?></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="petPhone_230018" value="<?=$data['petPhone_230018']?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="petId_230018" value="<?=$data['petId_230018']?>">
                </td>
            </tr>
        </table>
    </form>   
    <a href="read_pet230018.php"> << Back To List</a>
</body>
</html>