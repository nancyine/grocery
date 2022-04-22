<?php
   include 'connection.php';

   $id=$_POST['id'];
   $names=$_POST['names'];
   $email=$_POST['email'];
   $username=$_POST['username'];
   $pass=$_POST['password'];


   $up="UPDATE account SET Names='".$names."',useremail='".$email."', username='".$username."', password='".$pass."' WHERE  Account_id='".$id."' ";

    $conn->query($up);

       header("location:view.php");

?>
