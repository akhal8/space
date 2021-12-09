<?php 

/*crewsize varible created to save the information from the form crewsize field*/
$crewsize = $_POST["crewsize"];

/*using the if statement to check if the data inside the crewsize variable is equal to or smaller than 1 show an error*/
if ($crewsize <= 1){
    echo "The crew size must be more than one";
    die("Error:".mysqli_error($connection));
}
/* if data is bigger than 1 write it worked*/
else {
    echo "It worked!";
}

?>