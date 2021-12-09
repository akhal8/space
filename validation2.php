<?php  

$ast_name = $ast_no_missions = "";
$ast_errors = array('ast_name' => '','ast_no_missions' =>'');
if (isset($_POST['ast_submit'])) {
  

    if (empty($_POST["ast_name"])) {  
        $ast_errors['ast_name'] = 'An Input of characters with our without whitespaces is required';  
  } else {  
       $ast_name = ($_POST["ast_name"]);  
    //         //check if name only contains letters and whitespace  
           if (!preg_match("/^[a-zA-Z ]*$/",$ast_name)) {  
            $ast_errors['ast_name'] = 'An Input of characters with our without whitespaces is required';
         }
       }
    if (empty($_POST["ast_no_missions"])) {  
        $ast_errors['ast_no_missions'] = 'An Input of into this field is required*';  
    } else {  
        $ast_no_missions = ($_POST["ast_no_missions"]);  
             //check if name only contains letters and whitespace  
             if (!preg_match("/^[a-zA-Z ]*$/",$ast_no_missions)) {  
                $ast_errors['ast_no_missions'] = 'An Input of date is required';
         }
       }
          
} 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>