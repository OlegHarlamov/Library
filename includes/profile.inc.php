<?php
    include_once('functions.inc.php');
    include_once('db.inc.php');
if (isset($_POST["edit"]))
{
    session_start();
    $username = $_SESSION["username"];
    echo $username;
}   
else if(isset($_POST["save"]))
{
    session_start();
    $username = $_SESSION["username"];
    $first_name = $_POST['fname'];
    $last_name =  $_POST['lname'];

    if(incorrectNames($connection, $username, $first_name, $last_name))
    {
        header('Location: ../profile.php');
        exit();
    }
    header('Location: ../profile.php');
        exit();
}

?>
