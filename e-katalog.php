<?php 
include "pages/header.php";
include "includes/db.inc.php";
?>
<div class="searchBlock">
<input type="search" class="search" placeholder="Search...">
<button class="searchBtn"><img src="assets/search.png" alt="image" width="22px" height="22px"></button>
</div>
                <?php 
                
                 ?>

            <?php 
                $sql = "SELECT * FROM books ORDER BY id";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_all($result);
                foreach ($row as $new) {
                ?>
    	<div class="containerKatalog">
    		<div class="book">
    			<img src="<?php echo $new['4'] ?>" alt="error" class="imgBook">
    				<div class="bodyBook">
                        <form action="includes/deleteBook.php" method="POST">
                            <?php if($_SESSION['permission'] == 1){ ?> <input class="inputID" type="hidden" name="id" readonly="readonly" value="<?php echo $new['0'] ?>"> <?php } ?>
    					<h1 class="titleBook"><?php echo $new['1']; ?><?php if($_SESSION['permission'] == 1){ ?><button type="submit" class="del" name="delete">Удалить</button><?php } ?></h1>
    					<hr class="bord">
    					<p class="textBook"><?php echo mb_strimwidth($new['2'], 0, 280, "...");?></p>
    					<hr class="bord">
    					Author: <?php echo $new['3']; ?><a href="" class="readMore">Читать дальше -></a>
                        </form>
    				</div>
    		</div>
    	</div>
        <?php } ?>
<?php 
include "pages/footer.php";
 ?>