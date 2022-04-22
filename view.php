<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
    .content{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#2980b9, #8e44ad);
  height: 100vh;
  overflow: hidden;
}
.content table{
  background-color: white;
  width:50%;
  padding:10px 10px;
  border:none;
  margin:10% 20%;
  border-radius:10px;
  text-align: center;
}
.content table td,th{
    padding:6px 6px;
    border:none;
}

.content table h1{
    padding:16px;
    background: linear-gradient(120deg,#2980b9, #8e44ad);
    color:white;

}
.content table a{
       text-decoration:none;
      
    
}

</style>
<?php
    include 'connection.php';
   


    $select="SELECT * FROM  account";

    $check=$conn->query($select);
    if($check->num_rows>0)
    {

        ?>
        <div class="content">

        <table border="2" cellpadding="0" cellspacing="0">

        <tr>
            <tr><th colspan=8><h1>Users</h1></th></tr>
            
            <th>N <sup><U>o</U></sup> </th>
         
            <th>NAMES</th>
           <th>USER NAME</th> 
           <th>EMAIL</th>
           <th>UPDATE</th>
           <th> DELETE</th>
        </tr>

        <?php

         $i=0;
        while($show=$check->fetch_assoc())

        {
            $i++;
            $Account_id=$show['Account_id'];
            $Names=$show['Names'];
            $username=$show['username'];
            $useremail=$show['useremail'];
            $password=$show['password'];
            $update='<a href="update_process.php?update_id='.$Account_id.' &Names='.$Names.' &username='.$username.' &useremail='.$useremail.' &password='.$password.' "> Update</a>';
            $delete="<a href='delete.php?delete_id=".$Account_id."'>Delete</a>";
        
        ?>

        <tr>
            <td><?=  $i; ?></td>
            <td><?=  $Names?></td>
            <td><?=  $username?></td>
            <td><?=  $useremail?></td>
            <td><?= $update?></td>
            <td><?=  $delete?></td>
            
            </tr>

<?php
    
     }
     ?>
     </table>
     </div>
     <?php
    }
    else{
        echo "Records unavailable :(";
    }
 
?>
