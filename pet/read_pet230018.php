<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script> alert('PLEASE LOGIN FIRST!');window.location.replace('../login/form_login230018.php');</script>";
} ?>
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
    <h3>Pets List</h3>
    <h4>click pet name to view medical records</h4>
    <table border="1">
        <tr align="center">
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age (month)</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Address</th>
            <th>Phone</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        include "../connection_230018.php";            //call connection
        $query = "SELECT * FROM pets_230018";       //make sql query
        $pets = mysqli_query($db_connection, $query); //run query

        $i = 1; //initial cointer for numbering
        foreach ($pets as $data) : //loop for extract data from database
        ?>
            <tr align="center">
                <td><?php echo $i++; ?></td>
                <td><a href="../medicals/medicals_230018.php?petId=<?= $data['petId_230018'] ?>"><?php echo $data['petName_230018']; ?></a></td>
                <td><?php echo $data['petType_230018']; ?></td>
                <td><?= $data['petGender_230018']; ?></td>
                <td><?= $data['petAge_230018']; ?></td>
                <td>
                    <img src="../uploads/pets/<?= $data['petPhoto_230018']; ?>" width="50" height="50"><br>
                    <a href="pet_photo230018.php?id=<?= $data['petId_230018'] ?>"> Change Photo</a>
                </td>
                <td><?= $data['petOwn_230018']; ?></td>
                <td><?= $data['petAdd_230018']; ?></td>
                <td><?= $data['petPhone_230018']; ?></td>
                <td><a href="edit_pet230018.php?id=<?= $data['petId_230018'] ?> ">Edit Pet</a></td>
                <td><a href="delete_pet230018.php?id=<?= $data['petId_230018'] ?>" onclick="return confirm('Are you sure?')">Delete Pet</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <ul>
        <a href="../index.php">
            << Back Home</a>
                <a href="add_pet230018.php">Add New Pet >></a>
    </ul>
</body>

</html>