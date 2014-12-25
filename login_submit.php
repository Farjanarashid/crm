<?php
session_start();
require_once('db_connection.php');
$roll = mysql_real_escape_string($_POST['roll']);
$name = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$pass = md5($password);
$sql1 = mysql_query("SELECT roll,username FROM login where password = '{$pass}' AND username = '{$name}'");
if(mysql_num_rows($sql1)>0):
while ($rows = mysql_fetch_array($sql1)) {
       if ($rows['roll'] == 'admin') {
            $_SESSION['r'] = 0;
            $_SESSION['name'] = $name;
            header("location:home.php");
        }
        if ($rows['roll'] == 'technical') {
            $_SESSION['r'] = 3;
            $_SESSION['name'] = $name;
            header("location:home.php");
        }
 }
else:
        $_SESSION['error_msg'] = 'Please Check Your Username or password';
        header("location:index.php");
    endif;
?>