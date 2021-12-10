<?php
/* connecting to the database by writing the name of database, username, password and host*/ 
define("DB_NAME", "space_mission");
define("DB_USER", "admin");
define("DB_PASSWORD", "password");
define("DB_HOST", "localhost");

/*using the connection variable to connect to the database with details that i have wrote above*/
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
/*creating an if statement to check if the connection is successfull or not*/
/*if connection is failed show the error*/
if (!$connection) {
    die('Could not connect ot the database:'.mysqli_error());
}
/*if the connection is successfull write it worked*/
else {
    echo "the connection to the database was succussful and the data was correclty inserted into the database";
}
?>