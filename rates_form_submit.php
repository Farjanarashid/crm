<?php 
session_start();
        $vendor_code = $_POST['vendor_code'];
        $destination = $_POST['destination'];
        $code = $_POST['code'];
        $prefix = $_POST['prefix'];
        $rate = $_POST['rate'];
        $effective_date = $_POST['date'];

        require_once('db_connection.php');

        $sql= "insert into rates (vendor_code, destination,code,prefix,rate,effective_date) values('$vendor_code','$destination','$code','$prefix','$rate','$effective_date')";
        $result = mysql_query($sql, $connection);
	if($result){       
	     $_SESSION['send']= "Data Saved Successfully !";			 
             header("location: rates_form.php");
         }else{		 
	     $_SESSION['send']= "<span style='color:red;'>Data Not Saved!</span>";			 
             header("location: rates_form.php");		 
	  }
?>
