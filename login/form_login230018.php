<!userTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic</title>
</head>
<body>
    <h1>Alys Pet Clinic</h1><hr>
    <h3>Form Login</h3>
    <form method="post" action="login_230018.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="userName_230018" required /></td>
            </tr>
            <tr>
		        <td>Password</td>
        	    <td><input type="password" name="pass_230018" id="pass" required /></td>
 	        </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;<input type="checkbox" onclick="show()">Show Password</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="login" value="LOGIN" />
                    <input type="reset" name="reset" value="RESET" />
                </td>
            </tr>
        </table>
    </form> 
    <script>
     function show() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
     }   
    </script>
</body>
</html>