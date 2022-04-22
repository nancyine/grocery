<?php
include 'coonection.php';
session_start();

?>







<html>
<link rel="stylesheet" href="style3.css">
<script src="https://kit.fontawesome.com/a9b4cbe169.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap" rel="stylesheet">
<div id="bannerrr">

    <div id="sidenav">
        <nav>
            <ul>
                <li><span><i class="fa-solid fa-user-tie"></i><br>
                <h4>Username</h4></span></li>
                <li><a href="index.php#feature"><i class="fa-solid fa-list"></i> About</a></li>
                <li><a href="index.php#services"><i class="fa-solid fa-image"></i>  Gallery</a></li>
                <li> <a href="index.php#reserve"><i class="fa-solid fa-calendar-days"></i>  Book</a></li>
                <li> <a href="index.php#blog"><i class="fa-solid fa-comments"></i>  Blog</a></li>
                <li> <a href="index.php#footer"><i class="fa-solid fa-address-card"></i>  Contact</a></li>
                <li> <a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>  Log Out</a></li>
</ul>
        </nav>
    </div>
</div>
    <h3><i class="fa-solid fa-user-check"></i> Client's Report</h3>
<div class="rep">
<?php
$projecte="SELECT * FROM register";
$chk=$conn->query($projecte);
if($chk->num_rows>0)
{
    ?>  
    <table border="0" callpadding="0">
        <tr>
            <th>N<sup>0</sup></th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        $i=0;
        while($result=$chk->fetch_assoc())
        {
            $i++;
            echo "<tr><td>".$i++."</td><td>".$result['firstname']."</td><td>".$result['lastname']."</td><td>".$result['username']."</td><td>".$result['email']."</td><td><a href='edit.php?edit_user=".$result['id']."'><b>Edit</b></a></td><td><a href='delete.php?delete_user=".$result['id']."'><b>Delete</b></a></tr>";
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