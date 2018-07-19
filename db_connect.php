<?php
//define("HOST", "procon2014.db.11948843.hostedresource.com"); // The host you want to connect to.
//define("USER", "procon2014"); // The database username.
//define("PASSWORD", "Rot@r@ct123"); // The database password. 
//define("DATABASE", "procon2014"); // The database name.

define("HOST", "localhost"); // The host you want to connect to.
define("USER", "procondba"); // The database username.
define("PASSWORD", "P@ssw0rd"); // The database password. 
define("DATABASE", "procon22_db2018"); // The database name.


$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// If you are connecting via TCP/IP rather than a UNIX socket remember to add the port number as a parameter.
?>