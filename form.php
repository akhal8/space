<!doctype html>
<html>
    <head>
        <title>My PHP Form</title>
        <style>
            body {
                background-color: lightgrey;
                text-align: center;
            }
            .form_name{  
                padding: 10px;
            }
            .form_address{  
                padding: 10px;
            }
            .form_email{  
                padding: 10px;
            }
            .sub_button{  
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>My Form</h1>
        <form action="example.php" method="POST">
        <div class= "form_name">Name: <input type="text" name="name"><br></div>
        <div class= "form_address">Address: <input type="text" name="address"><br></div>
        <div class= "form_email">E-mail: <input type="text" name="email"><br></div>
        <div class= "sub_button"><input type="submit"></div>
        </form>
    </body>
</html>