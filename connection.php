<?php
      session_start();
      
      $server="localhost";
      $user="root";
      $password="";
      $database="armyshop_db";

     $conn=mysqli_connect($server,$user,$password,$database);

      if($conn)
      {
          //echo "well connected";
      }

      else{
          die(mysqli_connect_error());
      }

?>