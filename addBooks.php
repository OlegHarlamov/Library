<?php 
include('pages/header.php');
 ?>
<div class="containerLogin">
<div class="containerAddBooks">
<form action="includes/addBooks.inc.php" method="POST" enctype="multipart/form-data">
	<label for=""><input type="text" placeholder="Название" name="title" class="inputForm"></label>
	<label for=""><input type="text" placeholder="Текст" name="text" class="inputForm"></label>
	<label for=""><input type="text" placeholder="Автор" name="author" class="inputForm"></label>
	<input type="file" name="image">
	<button type="submit" name="submit" class="btnReg">Добавить</button>
</form>
</div>
</div>

<?php 
include('pages/footer.php')
 ?>