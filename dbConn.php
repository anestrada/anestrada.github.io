<?php

// database connection
function getDbConn() {
  $host = 'localhost'; // cuz in C9
  $dbname = 'smartdecisions';
  $username = 'hoconnell';
  $password = '';
  
  $dbConn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
  $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $dbConn;
}

?>