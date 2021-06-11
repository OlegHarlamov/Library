<?php
include ('pages/header.php');
if (isset($_SESSION["id"]))
{
    ?>
    <div class="containerProfile">
        <?php echo  'Hello, ' . $_SESSION["username"] .'!'; ?>
        <br>
        First name: <?php echo $_SESSION['first_name'] ?>
        <br>
        Last name: <?php echo $_SESSION['last_name'] ?>
        <br>
        Here you can edit your profile!
    <form action="includes/profile.inc.php" method="POST">
        <input type="text" name="fname" placeholder="First Name" size="25">
        <br>
        <input type="text" name="lname" placeholder="Last Name" size="25">
        <br>
        <button type="submit" name="save">Save</button>
    </form>   
</div>
    <?php
}
include ('pages/footer.php')
?>