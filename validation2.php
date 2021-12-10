<?php
/*Validation code from www.w3schools.com/php/php_form_validation.asp*/
/* this code where applied checks the user input and 
removes any unnecessary data that user puts in the textboxes, like any unnecessary space or unnecessary characters*/
function validation_form($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>