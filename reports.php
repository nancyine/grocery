

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grocery</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> grocery </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
        <a href="login.php">login</a>
        <a href="view.php">view</a>
        
    </nav>

    
</header>


<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
    .rep{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#2980b9, #8e44ad);
  height: 100vh;
  overflow: hidden;
}
.rep table{
  background-color: white;
  width:50%;
  padding:10px 10px;
  border:none;
  margin:10% 20%;
  border-radius:10px;
}
.rep table td,th{
    padding:6px 6px;
    border:none;
}

.rep table h1{
    padding:16px;
    background: linear-gradient(120deg,#2980b9, #8e44ad);
    color:white;

}
.rep table a{
       text-decoration:none;
}

</style>
<div class="rep">
<?php
$projecte="SELECT * FROM armyshop_db";
$chk=$conn->query($projecte);
if($chk->num_rows>0)
{
    ?>  
    <table border="0" callpadding="0">
        <tr>
            <th>N<sup>0</sup></th>
            <th>Names</th>
           
            <th>Username</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        $i=0;
        while($result=$chk->fetch_assoc())
        {
            $i++;
            echo "<tr><td>".$i++."</td><td>".$result['Names']."</td><td>".$result['username']."</td><td>".$result['useremail']."</td><td><a href='view.php?edit_user=".$result['id']."'><b>Edit</b></a></td><td><a href='delete.php?delete_user=".$result['id']."'><b>Delete</b></a></tr>";
            /*
            
            $id=$result['id'];
            $firstname=$result['firstname'];
            $lastname=$result['lastname'];
            $username=$result['username'];
            $email=$result['email'];
            ?>

        <tr>
            <td><? $i ?></td>
            <td><? $firstname ?></td>
            <td><? $lastname ?></td>
            <td><? $username ?></td>
            <td><? $email ?></td>
        </tr>
        
        <?php*/
        }
        ?>
        
        </table>
        <?php
}
else{

    echo "no records";
   
}
 ?>
 </div>