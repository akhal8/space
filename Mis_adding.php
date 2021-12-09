<?php
/*linking the this code to the link file code, thats where the connection to database code is saved so without this connection the code will not work*/
include 'link.php';
include 'validation.php';

/*Getting the details name from the form with their names and saving it in different databases*/
$name = $_POST["name"];
$destination = $_POST["destination"];
$launch_date = $_POST["date"];
$mis_type = $_POST["type"];
$target_id = $_POST["target_no"];

/* Inserting the data from the variables to the database tables by writing the name of the table and the coloumns inside the database*/
/*connecting the database columns to the variable where the answers are saved from the form*/
$sql = "INSERT INTO mission(name, destination, launch_date, type, crew_size, target_id) VALUES ('$name', '$destination', '$launch_date', '$mis_type', '$crewsize', '$target_id')";

/* using an if statment to check if the query is successfull or not*/
/*show an error if the connection is failed*/
if(!mysqli_query($connection, $sql)){
    die("Error:".mysqli_error($connection));
}
/*if the query is succesfull write data inserted*/
else{
    echo "Success, Your have been stored into the database.";
}
/*This code is used to close the connection with the database*/
mysqli_close($connection);