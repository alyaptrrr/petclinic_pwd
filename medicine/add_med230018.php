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
    <form method="post" action="create_med230018.php">
        <table>
            <tr>
                <td>Medicine Name</td>
                <td><input type="text" name="medName_230018" required></td>
            </tr>
            <tr>
                <td>Medicine Type</td>
                <td>
                    <input type="radio" name="medType_230018" value="Generic" required>Generic |
                    <input type="radio" name="medType_230018" value="Patent" required> Patent
                </td>
            </tr>
            <tr>
                <td>Medicine Unit</td>
                <td>
                <select name="medUnit_230018" id="" required>
                        <option value="">choose</option>
                        <option value="Strip">Strip</option>
                        <option value="Bottle">Bottle</option>
                        <option value="Sachet">Sachet</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td><textarea name="medPrice_230018" required></textarea></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="medDescription_230018" required></textarea></td>
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
    <a href="read_med230018.php"> << Back To List</a>
</body>
</html>