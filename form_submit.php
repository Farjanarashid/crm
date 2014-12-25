<?php 
session_start();
        $company_name = $_POST['company_name'];
        $company_address = $_POST['company_address'];
        $company_city = $_POST['company_city'];
        $company_state = $_POST['company_state'];
        $company_country = $_POST['company_country'];
        $zipcode = $_POST['zipcode'];
        
        $commercial_name = $_POST['commercial_name'];
        $commercial_phone = $_POST['commercial_phone'];
        $commercial_fax = $_POST['commercial_fax'];
        $commercial_email = $_POST['commercial_email'];
        $commercial_im = $_POST['commercial_im'];

        $technical_name = $_POST['technical_name'];
        $technical_phone = $_POST['technical_phone'];
        $technical_fax = $_POST['technical_fax'];
        $technical_email = $_POST['technical_email'];
        $technical_im = $_POST['technical_im'];
        
        $rates_name = $_POST['rates_name'];
        $rates_phone = $_POST['rates_phone'];
        $rates_fax = $_POST['rates_fax'];
        $rates_email = $_POST['rates_email'];
        $rates_im = $_POST['rates_im'];

        $billing_name = $_POST['billing_name'];
        $billing_phone = $_POST['billing_phone'];
        $billing_fax = $_POST['billing_fax'];
        $billing_email = $_POST['billing_email'];
        $billing_im = $_POST['billing_im'];

        $model = $_POST['model'];
        $voicepace1 = $_POST['voicepace1'];
        $voicepace2 = $_POST['voicepace2'];
        $protocol = $_POST['protocol'];
        $prefix = $_POST['prefix'];
        $codec = $_POST['codec'];
        $analog_digital = $_POST['analog_digital'];

        $customer_id = $_POST['type'];

        require_once('db_connection.php');

        $sql1 = "insert into company_info (company_name, company_address,city,state,country,zip_code,customer_id) values
('$company_name','$company_address','$company_city','$company_state','$company_country','$zipcode','$customer_id')";
        $result = mysql_query($sql1, $connection);

        $sql2 = "insert into commercial_contact (name,phone,fax,email,im,customer_id) values
('$commercial_name','$commercial_phone','$commercial_fax','$commercial_email','$commercial_im','$customer_id')";

        $result = mysql_query($sql2, $connection);

        $sql3 = "insert into technical_contact (name,phone,fax,email,im,customer_id) values
('$technical_name','$technical_phone','$technical_fax','$technical_email','$technical_im','$customer_id')";

        $result = mysql_query($sql3, $connection);

        $sql4 = "insert into rates_contact (name,phone,fax,email,im,customer_id) values
('$rates_name','$rates_phone','$rates_fax','$rates_email','$rates_im','$customer_id')";

        $result = mysql_query($sql4, $connection);

        $sql5 = "insert into billing_contact (name,phone,fax,email,im,customer_id) values
('$billing_name','$billing_phone','$billing_fax','$billing_email','$billing_im','$customer_id')";

        $result = mysql_query($sql5, $connection);

        $sql6 = "insert into interconnection_info (equipment,ip_address_TFV,ip_address_TTV,protocol,if_prefex_required,codex,termination_type,customer_id) values
('$model','$voicepace1','$voicepace2','$protocol','$prefix','$codec','$analog_digital','$customer_id')";

        $result = mysql_query($sql6, $connection);        

	 $_SESSION['send']= "Data Saved Successfully !";		
	 
         header("location: form.php");
        ?>
