<?php
session_start();
    $type = $_POST['type'];
    $name = $_POST['company_name'];
    $info_type = $_POST['info_type'];   
    $file_name = $_FILES["file"]["name"];
    $allowedExts = array("doc", "xls" , "xlsx" ,"docx", "pdf");
    $temp = explode(".", $file_name);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "application/msword")
            || ($_FILES["file"]["type"] == "application/vnd.ms-excel")
            || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
            || ($_FILES["file"]["type"] == "application/pdf"))
            && in_array($extension, $allowedExts)
            )			{
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br>";			
        } else {
            date_default_timezone_set('Asia/Dhaka');
			$date = date('Y/m/d H:i:s');
			
			 require_once('db_connection.php');
            $info = "INSERT INTO docs (type, name,info_type,time,file_name,file_extension) VALUES ('$type', '$name', '$info_type', '$date', '$file_name', '$extension')";
            $query=mysql_query($info);
			if($query){
			  $_SESSION['upload']= "File Uploaded Successfully !";			 
                          header("location: add_docs.php");
			}
        
            $pic_tmp_name = $_FILES["file"]["tmp_name"];
            $uploads_dir = 'upload/';
            move_uploaded_file($pic_tmp_name, "$uploads_dir/$file_name");           
        }
    } else {
          $_SESSION['upload']= "<span style='color:red;'> You have choose invalide file. Please select valid file formate!</span>";			 
           header("location: add_docs.php");
    }
?>