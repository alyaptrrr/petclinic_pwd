<?php
session_start();
if (!isset($_SESSION['login'])) {
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
    <h3>Form Edit Doctors</h3>
    <?php
    //call connection
    include "../connection_230018.php";

    //make query SELECT
    $query = "SELECT * FROM doctors_230018 WHERE doctorsId_230018='$_GET[id]'";

    $doc = mysqli_query($db_connection, $query);

    //extract data from query result
    $data = mysqli_fetch_assoc($doc);
    ?>
    <form method="post" action="update_doc230018.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="docName_230018" value="<?= $data['docName_230018'] ?>" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="docGender_230018" value="Male" <?= ($data['docGender_230018'] == 'Male') ? 'checked' : ''; ?> required>Male |
                    <input type="radio" name="docGender_230018" value="Female" <?= ($data['docGender_230018'] == 'Female') ? 'checked' : ''; ?> required> Female
                </td>
            </tr>
            <tr>
                <td>Specialist</td>
                <td>
                    <select name="docSpecialist_230018" id="" required>
                        <option value="">choose</option>
                        <option value="Herdocologist" <?= ($data['docSpecialist_230018'] == 'Herdocologist') ? 'selected' : ''; ?>>Herdocologist</option>
                        <option value="Surgeon" <?= ($data['docSpecialist_230018'] == 'Surgeon') ? 'selected' : ''; ?>>Surgeon</option>
                        <option value="Radiologist" <?= ($data['docSpecialist_230018'] == 'Radiologist') ? 'selected' : ''; ?>>Radiologist</option>
                        <option value="Small Animal Veterinarian" <?= ($data['docSpecialist_230018'] == 'Small Animal Veterinarian') ? 'selected' : ''; ?>>Small Animal Veterinarian</option>
                        <option value="Pathologist" <?= ($data['docSpecialist_230018'] == 'Pathologist') ? 'selected' : ''; ?>>Pathologists</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Doctor Address</td>
                <td><textarea name="docAdd_230018" required><?= $data['docAdd_230018'] ?></textarea></td>
            </tr>
            <tr>
                <td>Conctact</td>
                <td><input type="text" name="docContact_230018" value="<?= $data['docContact_230018'] ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><img src="../uploads/doctors/<?= $data['docPhoto_230018']; ?>" width="auto" height="100" style="border-radius: 100%;"></td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo230018"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="doctorsId_230018" value="<?= $data['doctorsId_230018'] ?>">
                    <input type="hidden" name="docPhoto_230018" value="<?= $data['docPhoto_230018']; ?>" />
                </td>
            </tr>
        </table>
    </form>
    <a href="read_doc230018.php">
        << Back To List</a>
</body>

</html>