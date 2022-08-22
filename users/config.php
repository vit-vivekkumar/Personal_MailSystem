<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql112.epizy.com');
define('DB_USERNAME', 'epiz_31873589');
define('DB_PASSWORD', 'S7DrIvVmXlv');
define('DB_NAME', 'epiz_31873589_login_system');
 
/* Attempt to connect to MySQL database */
$conection_db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conection_db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>