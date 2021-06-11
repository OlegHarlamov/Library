<?php
if (isset($_POST["submit"]))
{
    include_once('functions.inc.php');
    include_once('db.inc.php'); 
    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];

    $uploaddir = "uploads/";
    $image_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $_SESSION["image"] = $uploaddir . $image_name;
    $uploadedfile = $uploaddir . $image_name;
    move_uploaded_file($tmp_name,"../".$uploaddir.$image_name);

        if (emptyInputs($title,$text,$author) == true)
        {
            header("Location: ../register.php?error=emptyinputs");
            exit();
        }
        addBook($connection,$title, $text, $author, $uploadedfile);
       
    }
    else
    {
        header("Location: ../addBooks.php");
        exit();
    }

?>