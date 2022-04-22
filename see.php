
<?php
include 'connection.php';
if($_SESSION['Names'])
{}
else{
  header("location:logout.php");
}
  
 
?>
<title><?= $_SESSION['Names'];?></title>
<div class="content">
<fieldset class="border">


<h1><?= $_SESSION['Names'];?> Welcome </h1>
</fieldset>
</div>
<a href="logout.php">logout</a>