<?php 

include('db.inc.php');

if(isset($_POST['delete'])){

$idBook = $_POST['id'];

$sql = "DELETE FROM `books` WHERE `id` = ?";
$stmt = mysqli_stmt_init($connection);
if (!mysqli_stmt_prepare($stmt,$sql))
{
    header("Location: ../e-katalog.php?error=stmt");
    exit();
}
mysqli_stmt_bind_param($stmt,"i", $idBook);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("Location: ../e-katalog.php");
}
 ?>