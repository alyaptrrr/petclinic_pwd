<?php
session_start(); //start the session
if(isset($_POST['change'])) { //check variable POST from Form
    include "../connection_230018.php"; //call connection

    //encrypt the new password
    $password = password_hash($_POST['new_password230018'], PASSWORD_DEFAULT);

    //make query for update password
    $query="UPDATE user_230018 SET pass_230018='$password' WHERE userId_230018='$_SESSION[userId]'";

    //run the query
    $update=mysqli_query($db_connection, $query);

    if($update) { //check query result TRUE/success
        $_SESSION['pass']=$password; //update if data success
        //success msg 
        echo "<script> alert('CHANGE PASSWORD SUCCESSED!');window.location.replace('../index.php');</script>";
    } else { //fsiled msg
        echo "<script> alert('CHANGE PASSWORD FAILED!');window.location.replace('change_password230018.php');</script>";
    }
}
?>