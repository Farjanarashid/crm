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
                $vendor_code = $csv[0];
                $destination = $csv[1];
                $code = $csv[2];
                $prefix = $csv[3];
                $rate = $csv[4];
                $effective_date = $csv[5];
                if ($csv[0] == "vendor_code" ||
                        $csv [1] == "destination" ||
                        $csv [2] == "code" ||
                        $csv [3] == "prefix" ||
                        $csv [4] == "rate" ||
                        $csv [5] == "effective_data"
                )
                    continue;

                else {
                    $qry = "SELECT * FROM rates";
                   $sql1 = mysql_query($qry);
                  if (mysql_num_rows($sql1) > 0) {
                $i = 0;              
                $dataArry = array();
                while ($row = mysql_fetch_array($sql1)) {
                    $dataArry[] = $row;
                }
                foreach ($dataArry as $rowsvalue):
                    $qry2 = "select * from rates where code = '{$code}'";
                    $qryrslt = mysql_query($qry2);
                    if (mysql_num_rows($qryrslt)>0) {
                        $flag = 0;
                    } else {
                        $flag = 1;
                    }
                endforeach;
                       
                        if ($flag === 1) {
                            $sql = "insert into rates (vendor_code, destination,code,prefix,rate,effective_date) values
             ('$vendor_code','$destination','$code','$prefix','$rate','$effective_date')";
                            $result = mysql_query($sql, $connection);
                            $_SESSION['send'] = "Data added Successfully !";
                            header('Location:rates.php');
                        } else {
                            $_SESSION['send'] = "Data already exists!";
                            header('Location:rates.php');
                        }
                    } else {
                        $sql = "insert into rates (vendor_code, destination,code,prefix,rate,effective_date) values
             ('$vendor_code','$destination','$code','$prefix','$rate','$effective_date')";
                        $result = mysql_query($sql, $connection);
                        $_SESSION['send'] = "Data Saved Successfully !";
                        header('Location:rates.php');
                    }
                }
            }
        
    } else {
        
        $_SESSION['send'] = "<span style='color:red;'> You have choose invalide file. Please select valid file formate!</span>";
        header('Location: rates.php');
    }
} else {
    $_SESSION['send'] = "no file saved!";
    header('Location: rates.php');
}
?>