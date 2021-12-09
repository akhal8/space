<?php
/* connecting this file to link file where the connection details between the database are saved*/
include 'link.php';
include 'validation2.php';
/*getting the details from the form and saving it into the variables*/


if (isset($_POST['ast_submit'])){ 

    if(empty($_POST['last_name'])){
      echo'Name is required <br />';
      die('Could not connect:'.mysqli_error());
    }
    else{
      echo htmlspecialchars($_POST['last_name']);
    }
    if(empty($_POST['no_missions'])){
        echo'Number of Mission is required <br />';
        die('Could not connect:'.mysqli_error());
      }
      else{
        echo htmlspecialchars($_POST['no_missions']);
      }
}

$astronaut_name = $_POST["last_name"];
$astronaut_no_missions = $_POST["no_missions"];

/* creating a query to put the data that we saved in variables and put that in the database table astronaut in different coloumns*/
$sql = "INSERT INTO astronaut(name, no_mission) VALUES ('$astronaut_name', '$astronaut_no_missions')";  
/*Creating an if statement to check if query is successfull or */
/*if the query is unsuccesfull show an error*/
if(!mysqli_query($connection, $sql)){
    echo "<script>alert('oops! Some Error, Try Again!!!!')</script>";
}
/*if the query is successfull write Data Inserted*/
else{
    echo "Data Inserted";
}

/*This code is used to close the connection with the database*/
mysqli_close($connection);