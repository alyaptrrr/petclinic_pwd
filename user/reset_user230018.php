<?php
if (isset ($_GET['id'])) {
    include "../connection_230018.php";
    $password = password_hash($_GET['type'], PASSWORD_DEFAULT);
    $query="UPDATE user_230018 SET pass_230018='$password' WHERE userId_230018='$_GET[id]'";
    $update= mysqli_query($db_connection, $query);
    if($update) {
        echo "<script> alert('RESET SUCCESSED!')</script>";
    } else {
        echo "<script> alert('RESET FAILED!')</script>";
    }
}
?>
    <script>window.location.replace("read_user230018.php");</script>