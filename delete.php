<?php
include 'db.php';

$index=$_GET['id'];

$sql="DELETE FROM users WHERE id=$index";
$query=mysqli_query($connection, $sql);

if($query)
    echo "Deleted";
else
    echo "Error in delete";
header('Location:admin_page.php');