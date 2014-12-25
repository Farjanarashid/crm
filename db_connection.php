<?php
//create database connection
$connection = mysql_connect("localhost" , "root" , "");
if(!$connection)
{
die("database connection failed : " . mysql_error());
}
//select a database to use
mysql_select_db("crm",$connection)
or die ("database not found"); 
?>