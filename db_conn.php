<?php

$sname= "localhost";
//Bancos de dados MySQL ( cpanel )
$unmae= "#";
$password = "#";

//phpMyAdmin (cpanel)
$db_name = "#";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}