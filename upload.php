<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>title</title>
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
	Name: <input type="text" name="name"><br> 
   E-mail: <input type="text" name = "email"><br> 
  Phone: <input type="text" name = "phone"><br> 
  Photo: <input type="file" name="photo"><br> 
       <input type="submit" value="Add">
	</form>
	<?php 
 
 //This is the directory where images will be saved 
 $target = "upload/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This gets all the other information from the form 
 $name=$_POST['name']; 
 $email=$_POST['email']; 
 $phone=$_POST['phone']; 
 $pic=($_FILES['photo']['name']); 
 
 // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()) ; 
 mysql_select_db("crm") or die(mysql_error()) ; 
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `p` VALUES ('$name', '$email', '$phone', '$pic')") ; 
 
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 //Gives and error if its not 
 echo "Sorry, there was a problem uploading your file."; 
 } 
 ?> 
</body>
</html>
