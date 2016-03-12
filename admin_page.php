<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form/Admin Page</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>


<table class="responstable">
  
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Surname</th>
    <th>E-mail</th>
    <th>Password</th>
    <th>Sign-up date</th>
    <th>Last sign-in date</th>
    <th></th>
  </tr>
  
  
  <?php 
    include 'db.php';
    $sql="SELECT * FROM users";
    $query=mysqli_query($connection,$sql);
    while($row=mysqli_fetch_assoc($query)){
  echo "<tr>";
   foreach ($row as $key => $value) {
      echo "<td style='border:1px solid black;'>".$value."</td>";
   }
     $tempId=$row['id'];
    echo '<td><a href='."delete.php?id=$tempId".">Delete</a></td>";
   echo "</tr>";
}


  ?>
  
</table>
    
  </body>
</html>
