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
    <h3>Form Add Doctors</h3>
    <form method="post" action="create_doc230018.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="docName_230018" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="docGender_230018" value="Male" required>Male |
                    <input type="radio" name="docGender_230018" value="Female" required> Female
                </td>
            </tr>
            <tr>
                <td>Specialist</td>
                <th>
                <select name="docSpecialist_230018" id="" required>
                        <option value="">choose</option>
                        <option value="Herpetologist">Herpetologist</option>
                        <option value="Surgeon">Surgeon</option>
                        <option value="Radiologist">Radiologist</option>
                        <option value="Small Animal Veterinarian">Small Animal Veterinarian</option>
                        <option value="Pathologist">Pathologists</option>
                    </select>
                </th>
            </tr>
            <tr>
                <td>Doctor Address</td>
                <td><textarea name="docAdd_230018" required></textarea></td>
            </tr>
            <tr>
                <td>Conctact</td>
                <td><input type="text" name="docContact_230018" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
        </table>
    </form>
    <a href="read_doc230018.php"> << Back To List</a>
</body>
</html>