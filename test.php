<!doctype html> 
<html>
    <head>
        <title> Test Page</title>
    </head>
    <body>
        <?php
            echo "<h1>XAMPP Server runs successfully</h1>";
            echo "<p>This is my first PHP code</p>";


            function makeHeaderGreeting($name){
                return "<h1>Hello, {$name}!</h1>";
            }
            echo makeHeaderGreeting("Ali");

            function addingNumbers($first, $second){
                return $first + $second;
            }
            echo addingNumbers(4,9);

            function personDetail($name, $DOB){
                return "My name is $name and Date of birth is $DOB";
            }
            echo personDetail("Ali", 1992);
            print_r($_REQUEST);
            
            <form action="/example.html" method="Get">
                <input type ="text" name="First field">
            </form>

        ?>     
    </body>
</html>