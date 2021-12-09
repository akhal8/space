<?php
/* connecting to the database by writing the name of database, username, password and host*/ 
define("DB_NAME", "space_mission");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_HOST", "localhost");

/*using the connection variable to connect to the database with details that i have wrote above*/
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
/*creating an if statement to check if the connection is successfull or not*/
/*if connection is failed show the error*/
if (!$connection) {
    die('Could not connect:'.mysqli_error());
}
/*if the connection is successfull write it worked*/
else {
    echo "It worked!";
}
?>