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
    <h3>Change Password</h3>
    <form method="post" action="update_password230018.php">
        <table>
            <tr>
                <td>New Password</td>
                <td>: <input type="password" name="new_password230018" id="new" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;<input type="checkbox" onclick="show()"> Show Password</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="change" value="CHANGE" />
                    <input type="reset" name="reset" value="RESET" />
                </td>
            </tr>
        </table>
    </form>
    <p><a href="../index.php"> << Back Home</a></p>
    <script>
     function show() {
        var x = document.getElementById("new");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
     }   
    </script>
</body>
</html>