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
    <title> Pet Clinic</title>
</head>
<body>
    <h1>Alys Pet Clinic</h1>
    <h3>Doctors List</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Specialist</th>
            <th>Address</th>
            <th>Conctact</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        include "../connection_230018.php";            //call connection
        $query = "SELECT * FROM doctors_230018";       //make sql query
        $doctors = mysqli_query($db_connection, $query); //run query

        $i=1; //initial cointer for numbering
        foreach ($doctors as $data) : //loop for extract data from database
        ?>
        <tr align="center">
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['docName_230018']; ?></td>
            <td><?= $data['docGender_230018']; ?></td>
            <td><?= $data['docSpecialist_230018']; ?></td>
            <td><?= $data['docAdd_230018']; ?></td>
            <td><?= $data['docContact_230018']; ?></td>
            <td><img src="../uploads/doctors/<?= $data['docPhoto_230018']; ?>" width="50" height="50"></td>
            <td><a href="edit_doc230018.php?id=<?=$data['doctorsId_230018']?> ">Edit Doctor</a></td>
            <td><a href="delete_doc230018.php?id=<?=$data['doctorsId_230018']?>" onclick= "return confirm('Are you sure?')">Delete Doctor</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <ul>
        <a href="../index.php"> << Back Home</a>
        <a href="add_doc230018.php">Add New Doctors >></a>
    </ul>
</body>
</html> 