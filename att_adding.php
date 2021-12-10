<?php
/*creating a link between this code and another file where the connection between database details are saved*/ 
include 'link.php';
include 'validation2.php';

/*saving the details from the for into variables*/
$mission_id = test_input($_POST["mission"]);
$astronaut_id = test_input($_POST["astronaut"]);

/*Creating a query to insert the data from the variables to the table attends*/
$sql = "INSERT INTO attends(mission_id, astronaut_id) VALUES ('$mission_id', '$astronaut_id')";

/*creating an if statement to check if connection is successfull update the mission and astronaut table*/
if ($connection ->query($sql) === TRUE){
  /* creating a query to update the table mission, column crewsize by incrementing it by 1 if the mission id in the database is the same entered in the form*/  
  $Update_crewsize = "UPDATE mission SET crew_size = crew_size + 1 WHERE mission_id = $mission_id"; 
  mysqli_query($connection, $Update_crewsize); 

  /* creating a query to update the table astronaut, column mission_no by incrementing it by 1 if the astronaut id in the database is the same entered in the form*/  
  $Update_mission_no = "UPDATE astronaut SET no_mission = no_mission + 1 WHERE astronaut_id = $astronaut_id"; 
  mysqli_query($connection, $Update_mission_no); 
}
/*if the query is unsuccessful show an error*/
else{
    die("Error:".mysqli_error($connection));
}
/*close the connection from the database*/
mysqli_close($connection);