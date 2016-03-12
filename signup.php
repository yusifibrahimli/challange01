<?php
include "db.php";
 $firstName=$_POST['FirstName'];
 $lastName=$_POST['LastName'];
 $email=$_POST['Email'];
 $fpassword=$_POST['Password'];

 $sqlSelect="SELECT user_email FROM users";


$querySelect=mysqli_query($connection,$sqlSelect);

while($select=mysqli_fetch_assoc($querySelect)){
	//var_dump($select);
	foreach ($select as $value) {
		if($email==$value){
			//echo $email."=".$value."<br>";
			// header('Location:index.php?message="Bad"');

		}else{
			//$sql="INSERT INTO users (user_name,user_surname,user_email,user_pass) VALUES ('$firstName','$lastName','$email','$fpassword')";
			//echo '<br>';
			//echo $email."!=".$value."<br>";
			//exit();
		}
	}
}

if($email!=$value){
	echo 'mail yenidir<br>';
	$sql="INSERT INTO users (user_name,user_surname,user_email,user_pass) VALUES ('$firstName','$lastName','$email','$fpassword')";
	//$query=mysqli_query($connection,$sql);
	// header('Location:index.php?message="Okay"');
	// if($query){
	// 		echo "UURRAAAAAAAA!!!!!Tebrikler!!!!Siz qeydiyyatdan kecdiz!!!!!<br>";
	// }else{
	// 	echo "NC!NC!NC! SEf elemisiz!<br>";
	// }
}else{
	echo 'artiq var';
}



	

?>
