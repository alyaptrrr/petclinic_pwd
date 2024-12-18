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
    <h3>Form Add Pet</h3>
    <form method="post" action="create_pet230018.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="petName_230018" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="petType_230018" id="" required>
                        <option value="">choose</option>
                        <option value="cat">Cat</option>
                        <option value="dog">Dog</option>
                        <option value="reptil">Reptil</option>
                        <option value="bird">Bird</option>
                        <option value="rodent">Rodent</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="petGender_230018" value="Male" required>Male |
                    <input type="radio" name="petGender_230018" value="Female" required> Female
                </td>
            </tr>
            <tr>
                <td>Age (month)</td>
                <td><input type="number" name="petAge_230018" required></td>
            </tr>
            <tr>
                <td>Owner</td>
                <td><input type="text" name="petOwn_230018" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="petAdd_230018" required></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="petPhone_230018" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="SAVE" value="SAVE">
                    <input type="reset" name="RESET" value="RESET">
                </td>
            </tr>
        </table>
    </form>
    <a href="read_pet230018.php"> << Back To List</a>
</body>
</html>