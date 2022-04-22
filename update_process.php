<link rel="stylesheet" href="css/syle.css">
<?php
       include "connection.php";
?>
<div class="form">
<h1>Signup Here:</h1>
<form action="update.php" method="POST">
    <label><input type="hidden" name="id"  value="<?= $_GET['update_id'];?>"></label>
    <label>Names <input type="text" name="names" value="<?= $_GET['Names'];?>"></label>
    <label>E-mail <input type="email" name="email" value="<?= $_GET['useremail'];?>"></label>
    <label>Username <input type="text" name="username" value="<?= $_GET['username'];?>"></label>
    <label>Password <input type="password" name="password" value="<?= $_GET['password'];?>"></label>

    <button type="submit">Update</button>
    
    <br> have an account login <a href="login.php">Here</a>
</form>
</div>