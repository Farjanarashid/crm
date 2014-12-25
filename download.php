<?php
// off error reporting
error_reporting(0);
// set unlimited php execution time
set_time_limit(0);
 require_once('db_connection.php');
// connect to db
//dbConnect();
// read file id from url
$id = (int) isset($_GET['file_id']) ? $_GET['file_id'] : 0;
// retrieve file from db with id
$query = mysql_query("SELECT * FROM docs WHERE id = '$id'");

if ($row = mysql_fetch_array($query))
{
     $file = "upload/" . $row['file_name'];
	if (file_exists($file))
	{
		// increase counter value
		$count = ++$row['count'];
		// update count column
		mysql_query("UPDATE files SET count = '$count' WHERE id = {$row['id']} ");

		// set file download headers
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'. $row['file_name'] .'"');
		header('Content-Transfer-Encoding: binary');
		header('Connection: Keep-Alive');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));

		// read file
		readfile($file);
	}
	else {
		echo 'File not found!';
	}
}
else {
	echo 'Bad Request!';
}

?>