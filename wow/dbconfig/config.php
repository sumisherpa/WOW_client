<?php 

$dbhost = "localhost";
 $dbuser = "klass";
 $dbpass = "Baruch";
 $db = "wow1";


// Opens a connection to a MySQL server
$con = mysql_connect ($dbhost, $dbuser, $dbpass,$db) or die('try again in some minutes, please');
//if you want to suppress the error message, substitute the connection line for:
//$connection = @mysql_connect($server, $username, $password) or die('try again in some minutes, please');
?>
