<?php 
include "pages/header.php";
?>
<div class="containerLogin">
		<div class="loginBlock">
			<form action="includes/register.inc.php" method="POST">
				<label for="">
				<input type="text" placeholder="Логин" name="username" class="inputForm">
				</label>
				<label for="">
				<input type="password" placeholder="Пароль" name="password" class="inputForm">
				</label>
				<label for="">
				<input type="password" placeholder="Повторите пароль" name="repeat_password" class="inputForm">
				</label>
				<label for="">
				<input class="inputForm" name="first_name" placeholder="Имя" type="text">
				</label>
				<label for="">
				<input class="inputForm" name="last_name" placeholder="Фамилия" type="text">
				</label>
				<button name="submit" type="submit" class="btnReg">Зарегестрироваться</button>
			</form>
			            <?php
                if(isset($_GET["registration"]))
                {
                    if ($_GET["registration"] == "success")
                    {
                        echo 'Success!!';

                    }
                }
                if(isset($_GET["error"]))
                {
                    if ($_GET["error"] == "passwordsmismatch")
                    {
                        echo 'Пароли не совпадают!!!';

                    }
                    else if ($_GET["error"] == "stmt")
                    {
                        echo 'Трабла в STMT';
                    }
                    else if ($_GET["error"] == "emptyinputs")
                    {
                        echo 'Заполните все поля!!!';
                    }
                    else if ($_GET["error"] == "logintaken")
                    {
                        echo 'Логин уже используется';
                    }
                    else if ($_GET["error"] == "incorrectlogin")
                    {
                        echo 'Логин должен содержать только буквы и цифры!';
                    }
                }

            ?>
		</div>
</div>

<?php
include "pages/footer.php";
 ?>