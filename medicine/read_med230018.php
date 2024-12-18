<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pet Clinic</title>
</head>
<body>
    <h1>Alys Pet Clinic</h1>
    <h3>Medicine List</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Medicine Type</th>
            <th>Medicine Unit</th>
            <th>Price</th>
            <th>Description</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        include "../connection_230018.php";            //call connection
        $query = "SELECT * FROM medicines_2320018";       //make sql query
        $medicines = mysqli_query($db_connection, $query); //run query

        $i=1; //initial cointer for numbering
        foreach ($medicines as $data) : //loop for extract data from database
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['medName_230018']; ?></td>
            <td><?= $data['medType_230018']; ?></td>
            <td><?= $data['medUnit_230018']; ?></td>
            <td><?= $data['medPrice_230018']; ?></td>
            <td><?= $data['medPrice_230018']; ?></td>
            <td><?= $data['medDescription_230018']; ?></td>
            <td><a href="edit_med230018.php?id=<?=$data['medId_230018']?> ">Edit Doctor</a></td>
            <td><a href="delete_med230018.php?id=<?=$data['medId_230018']?>" onclick= "return confirm('Are you sure?')">Delete Doctor</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <ul>
        <a href="../index.php"> << Back Home</a>
        <a href="add_med230018.php">Add New Doctors >></a>
    </ul>
</body>
</html> 