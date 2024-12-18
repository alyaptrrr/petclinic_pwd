<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic</title>
</head>
<body>
    <h1>Alys Pet Clinic</h1><hr>
    <h3>Change Pet Photo</h3>
    <?php
        //call connection 
        include "../connection_230018.php";

        //make thte query based on username
        $query="SELECT * FROM pets_230018 WHERE petId_230018 ='$_GET[id]'";

        //run the query
        $pets= mysqli_query($db_connection, $query);

        //extract data from query result
        $data=mysqli_fetch_assoc($pets);
    ?>
    <form method="post" action="pet_upload230018.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td></td>
                <td><img src="../uploads/pets/<?= $data['petPhoto_230018']; ?>" width="100" height="100" style="border-radius: 100%;"></td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo230018" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="UPLOAD" />
                    <input type="hidden" name="petPhoto_230018" value="<?= $data['petPhoto_230018']; ?>" />
                    <input type="hidden" name="petId_230018" value="<?= $data['petId_230018']; ?>" />
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_pet230018.php"><< Back to Pet List</a></p>
</body>
</html>