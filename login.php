<?php 
include "pages/header.php";
?>
<div class="containerLogin">
<div class="loginBlock">
<form action="includes/login.inc.php" method="POST" class="loginForm">
	<div class="form">
	<input type="text" placeholder="Login" name="username" class="inputForm">
	<input type="password" placeholder="Password" name="password" class="inputForm">
	<p>Нет аккаунта? <a href="register.php" class="createAcc">Создать Аккаунт</a></p>
	<button name="submit" class="btnLogin" type="submit">Войти</button>
	</div>
</form>
</div>
</div>
<?php
if (isset($_GET['error']))
{
    if ($_GET['error'] == "emptyinputslogin")
    {
        echo '<p>Заполните пустые поля!</p>';
    }
}

?>
<?php
include "pages/footer.php";
 ?>