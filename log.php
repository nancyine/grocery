<?php
     include 'connection.php';
     

     $login="SELECT Account_id,Names,useremail,username,password FROM account WHERE username='".$_POST['username']."' AND 
     password='".md5($_POST['password'])."' ";

     $ok=$conn->query($login);

     if($ok->num_rows > 0)
     {
         $get=$ok->fetch_assoc();

         $account_id=$get['Account_id'];
         $names=$get['Names'];
         $useremail=$get['useremail'];
         $username=$get['username'];
         $password=$get['password'];
    

         $_SESSION['Names']=$names;

         echo 'Login succsessful';
         header('location:see.php');
     }

     else{
         
        die(mysqli_connect_error());
        
     }
?>