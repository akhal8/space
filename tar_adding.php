<?php
/*Creating a connection with the link file where the connection detaisl with the database is saved*/
include 'link.php';

/*saving the details from the form into the varibales.*/
$name = $_POST["name"];
$no_missions = $_POST["first_missions"];
$mis_type = $_POST["missions"];
$num_type = $_POST["target_num"];

/*creting a query to insert the data from the variables to the table targets in the space_mission database*/
$sql = "INSERT INTO targets(name, first_mission, type, no_missions) VALUES ('$name', '$no_missions', '$mis_type', '$num_type')";
/* using an if statement to check if the query is successful or not*/
/*if the connection is failed show an error*/
if(!mysqli_query($connection, $sql)){
    die("Error:".mysqli_error($connection));
}
/*if the connection is successfull write data inserted*/
else{
    echo "Data Inserted";
}
/* close the connection between the database*/
mysqli_close($connection);