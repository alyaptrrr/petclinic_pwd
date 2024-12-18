<?php
session_start(); //start the session
if(isset($_POST['login'])) { //check POST variabel from FORM
    include "../connection_230018.php"; //call connection

    //make thte query based on username
    $query="SELECT * FROM user_230018 WHERE userName_230018 ='$_POST[userName_230018]'";

    //run the query
    $login= mysqli_query($db_connection, $query);

    if(mysqli_num_rows($login) > 0) { //check if the username found or not
        $user = mysqli_fetch_assoc($login); //if user found, extract the data
        if(password_verify($_POST['pass_230018'], $user['pass_230018'])) { //verify the password

        //if the password match, then make session variable
        $_SESSION['login']=TRUE;
        $_SESSION['userId']=$user['userId_230018'];
        $_SESSION['userName']=$user['userName_230018'];
        $_SESSION['pass']=$user['pass_230018'];
        $_SESSION['userType']=$user['userType_230018'];
        $_SESSION['fullname']=$user['fullname_230018'];
        $_SESSION['userPhoto']=$user['userPhoto_230018'];

        //success login msg
            echo "<script> alert('LOGIN SUCCESSED!');window.location.replace('../index.php');</script>";
        } else { //paass didn't match, wrong pass msg then redirect to login form
            echo "<script> alert('LOGIN FAILED, WRONG PASSWORD!');window.location.replace('form_login230018.php');</script>";
        }
    } else { //user not found, login failed msg then redirect to login form
        echo "<script> alert('LOGIN FAILED, WRONG PASSWORD!');window.location.replace('form_login230018.php');</script>";
    }
  }
?>