<?php
session_start();
require_once('db_connection.php');
if ($_FILES['file']['size'] > 0) {

    $csv_mimetypes = array(
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.ms-excel',
        'application/vnd.msexcel',
    );
    if ($_FILES["file"]["type"] === "application/vnd.ms-excel" || $_FILES["file"]["type"] === 'text/csv' || $_FILES["file"]["type"] === 'application/csv' || $_FILES["file"]["type"] === 'application/vnd.msexcel' ) {
   
    $file = $_FILES['file']['tmp_name'];
    $open = fopen($file, "r");

    while ($csv = fgetcsv($open, "10000", ",", "'")) {
        $customer_id = $csv[0];

        $company_name = $csv[1];

        $company_address = $csv[2];
        $company_city = $csv[3];
        $company_state = $csv[4];
        $company_country = $csv[5];
        $zipcode = $csv[6];

        $commercial_name = $csv[7];
        $commercial_phone = $csv[8];
        $commercial_fax = $csv[9];
        $commercial_email = $csv[10];
        if (!filter_var($commercial_email, FILTER_VALIDATE_EMAIL)) {
            $commercial_email = "No Email";
        }
        $commercial_im = $csv[11];

        $technical_name = $csv[12];
        $technical_phone = $csv[13];
        $technical_fax = $csv[14];
        $technical_email = $csv[15];
        if (!filter_var($technical_email, FILTER_VALIDATE_EMAIL)) {
            $technical_email = "No Email";
        }
        $technical_im = $csv[16];

        $rates_name = $csv[17];
        $rates_phone = $csv[18];
        $rates_fax = $csv[19];
        $rates_email = $csv[20];
        if (!filter_var($rates_email, FILTER_VALIDATE_EMAIL)) {
            $rates_email = "No Email";
        }
        $rates_im = $csv[21];

        $billing_name = $csv[22];
        echo $billing_name;
        $billing_phone = $csv[23];
        $billing_fax = $csv[24];
        $billing_email = $csv[25];
        echo $billing_email;
        if (!filter_var($billing_email, FILTER_VALIDATE_EMAIL)) {
            $billing_email = "No Email";
        }
        $billing_im = $csv[26];

        $model = $csv[27];
        $voicepace1 = $csv[28];
        $voicepace2 = $csv[29];
        $protocol = $csv[30];
        $prefix = $csv[31];
        $codec = $csv[32];
        $analog_digital = $csv[33];

        if ($csv[0] == "TYPE(Vendor/Customer)" ||
                $csv[1] == "COMPANY NAME" ||
                $csv[2] == "ADDRESS" ||
                $csv[3] == "CITY/TOWN" ||
                $csv[4] == "STATE" ||
                $csv[5] == "COUNTRY" ||
                $csv[6] == "ZIP CODE" ||
                $csv[7] == "COMMERCIAL_NAME" ||
                $csv[8] == "PHONE" ||
                $csv[9] == "FAX" ||
                $csv[10] == "EMAIL" ||
                $csv[11] == "IM" ||
                $csv[12] == "TECHNICAL_NAME" ||
                $csv[13] == "PHONE" ||
                $csv[14] == "FAX" ||
                $csv[15] == "EMAIL" ||
                $csv[16] == "IM" ||
                $csv[17] == "RATES_NAME" ||
                $csv[18] == "PHONE" ||
                $csv[19] == "FAX" ||
                $csv[20] == "EMAIL" ||
                $csv[21] == "IM" ||
                $csv[22] == "BILLING_NAME" ||
                $csv[23] == "PHONE" ||
                $csv[24] == "FAX" ||
                $csv[25] == "EMAIL" ||
                $csv[26] == "IM" ||
                $csv[27] == "Equipment manufactured and model" ||
                $csv[28] == "IP Address (Traffic from Voicepace)" ||
                $csv[29] == "IP Address (Traffic to Voicepace)" ||
                $csv[30] == "Protocol  (SIP and/or H323)" ||
                $csv[31] == "Is prefix required? If yes, which?" ||
                $csv[32] == "CODEC" ||
                $csv[33] == "Termination Type (analog / digital)"
        )
            continue;

        else {

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
        }
    }
    $_SESSION['send'] = "Data Saved Successfully !";
    header('Location: csv.php');
    } else {
        
        $_SESSION['send'] = "<span style='color:red;'> You have choose invalide file. Please select valid file formate!</span>";
        header('Location: rates.php');
    }
} else {
    $_SESSION['send'] = "no file saved!";
    header('Location: csv.php');
}
?>