<?php
/*Creating a connection with the link file where the connection detaisl with the database is saved*/
include 'link.php';
include 'validation2.php';
/*saving the details from the form into the varibales.*/
$name = test_input($_POST["name"]);
$no_missions = test_input($_POST["first_missions"]);
$mis_type = test_input($_POST["missions"]);
$num_type = test_input($_POST["target_num"]);

/*creting a query to insert the data from the variables to the table targets in the space_mission database*/
$sql = "INSERT INTO targets(name, first_mission, type, no_missions) VALUES ('$name', '$no_missions', '$mis_type', '$num_type')";
/* using an if statement to check if the query is successful or not*/
/*if the connection is failed show an error*/
if(!mysqli_query($connection, $sql)){
    die("Error: There was a problem".mysqli_error($connection));
}
/*if the connection is successfull write data inserted*/
else{
    echo "Success, Your have been stored data into the database.";
}
/* close the connection between the database*/
mysqli_close($connection);