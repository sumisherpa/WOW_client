

<?php

session_start();

$data = $_POST;

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "C0l0n1zat10n";
 $db = "wow";


 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $con -> error);

 
 return $conn;
 }
echo "Connected Successfully";

function CloseCon($conn)
 {
 $con -> close();
 }
   
 

?>
