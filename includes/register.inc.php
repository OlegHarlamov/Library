<?php
if (isset($_POST["submit"]))
{
    include_once('functions.inc.php');
    include_once('db.inc.php'); 

    $username = $_POST["username"];
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat_password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

    if (emptyInputs($username,$password,$repeat_password) == true)
    {
        header("Location: ../register.php?error=emptyinputs");
        exit();
    }
    else if (incorrectLogin($username) == true)
    {
        header("Location: ../register.php?error=incorrectlogin");
        exit();
    }
    else if (passwordsMismatch($password,$repeat_password) == true)
    {
        header("Location: ../register.php?error=passwordsmismatch");
        exit();
    }
    else if(loginTaken($connection,$username) != false)
    {
        header("Location: ../register.php?error=logintaken");
        exit();
    }
    createUser($connection,$username,$password, $first_name, $last_name);
   
}
else
{
    header("Location: ../register.php");
    exit();
}
?>