<?php
   include 'connection.php';

   $id=$_POST['User_id'];
   $names=$_POST['Names'];
   $email=$_POST['Email'];
   $username=$_POST['Username'];
   $pass=$_POST['password'];


   $up="UPDATE users SET Names='".$names."',Email='".$email."', Username='".$username."', Password='".$pass."' WHERE User_id='".$id."' ";

     $conn->query($up);

       header("location:users.php");

?>
