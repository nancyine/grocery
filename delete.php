<?php
    include 'connection.php';
  

    $Account_id=$_GET['delete_id'];
    $delete="DELETE FROM account WHERE Account_id='".$Account_id."' ";
     
    $verify=$conn->query($delete);
    if($verify)
    {
        header("location:view.php");
    }
    else
    {
        die(mysqli_connect_error());
    }
?>