<?php
session_start();
session_destroy();
echo "<script> alert('LOGOUT SUCCESSED!');window.location.replace('form_login230018.php');</script>";
?>