<?php
    print_r($_POST);
    $value = $_POST["name"];
    $sec_value = $_POST["address"];
    $thi_value = $_POST["email"];
    echo $value . "<br>";
    echo $sec_value . "<br>";
    echo $thi_value . "<br>";
?>

<?php 
define("DB_NAME", "example");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_HOST", "localhost");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    die('Could not connect:'.mysqli_error());
}
else {
    echo "It worked!";
}


$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];

$sql = "INSERT INTO details(Person_name, Person_address, Person_email) VALUES ('$name', '$address', '$email')";
if(!mysqli_query($connection, $sql)){
    die("Error:".mysqli_error($connection));
}
else{
    echo "Data Inserted";
}
mysqli_close($connection);
?>

