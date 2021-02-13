<?php 
/*Database credentials. */
define('DBSERVER', 'localhost'); //Database Server
define('DBUSERNAME', 'root'); //Database username
define('DBPASSWORD', ''); // Database password
define('DBNAME', 'demo'); //Database name

//connect to mysql database
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

// check db connection
if($db === false) {
    die("Error: connection error. " . mysqli_connect_error());
}
?>