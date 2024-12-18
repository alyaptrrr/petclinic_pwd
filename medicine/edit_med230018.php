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
    <h3>Form Edit Medicine</h3>
    <?php
        //call connection
        include "../connection_230018.php";

        //make query SELECT
        $query="SELECT * FROM medicines_2320018 WHERE medId_230018='$_GET[id]'";

        $pet=mysqli_query($db_connection, $query);
        
        //extract data from query result
        $data=mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_med230018.php">
        <table>
            <tr>
            <td>Name</td>
            <td><input type="text" name="medName_230018" value="<?=$data['medName_230018']?>" required></td>
            </tr>
            <tr>
                <td>Medicine Type</td>
                <td>
                    <input type="radio" name="medType_230018" value="Generic" <?=($data['medType_230018']=='Generic')?'checked':'';?> required>Generic |
                    <input type="radio" name="medType_230018" value="Patent" <?=($data['medType_230018']=='Patent')?'checked':'';?> required> Patent
                </td>
            </tr>
            <tr>
                <td>Medicine Unit</td>
                <td>
                <select name="medUnit_230018" id="" required>
                        <option value="">choose</option>
                        <option value="Strip" <?=($data['medUnit_230018']=='Strip')?'selected':'';?>>Strip</option>
                        <option value="Bottle" <?=($data['medUnit_230018']=='Bottle')?'selected':'';?>>Bottle</option>
                        <option value="Sachet" <?=($data['medUnit_230018']=='Sachet')?'selected':'';?>>Sachet</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td><textarea name="medPrice_230018" required><?=$data['medPrice_230018']?></textarea></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="medDescription_230018" required><?=$data['medDescription_230018']?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="medId_230018" value="<?=$data['medId_230018']?>">
                </td>
            </tr>
        </table>
    </form>   
    <a href="read_med230018.php"> << Back To List</a>
</body>
</html>