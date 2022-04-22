<?php
        
        include 'connection.php';

        $names=$_POST['names'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);


        $insert="INSERT INTO account(Account_id,Names,useremail,username,password) VALUES ('','".$names."','".$email."','".$username."','".$password."')";

        $check=$conn->query($insert);

        if($check)
        {
            header("location:login.php");
        }
        else{
            echo "Not recorded";
        }

?>