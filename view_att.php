<!DOCTYPE html>
<html>
    <head>
      <title>Attends</title>
       <!--links which are used to connect with bootstrap framework css and js latest version-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
      <!-- First div for the main header of the page with class row and column which take whole width of the page -->
      <!--Justify content to move the text in the center of page, with black background (bg-dark) and white text(text-white)-->
      <div class="row">
      <div class="col d-flex justify-content-center bg-dark text-white">
      <!--using heading 1 for the title-->
        <h1>Attends</h1>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border border-warning">
      <div class="container-fluid">
        <!--a creates a link to the text, here its creating a link for petshop so when user clicks on pets it opens index.html-->
        <a class="navbar-brand"  href="index.php">Space Mission</a>
        <!-- creating a button for the collapsing of my navbar links, class toggler is use for collapse plugin behaviours and 
        collapse is use for grouping and hiding navbar contents-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <!--span is used to target a text to change the style of that 
            but in our case its the navbar toggler icon that changing to make it bigger -->
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--Another div, class and id for the navbar, collapse navbar is used for collapsing the navbar depending on the user screen 
        and making it elements center with the class justify and using id to style this div. which is designed by Bootstrap. -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <!--Another div for the navbar and navbar links with the class navbar-nav which allows you to design the navbar area-->
          <div class="navbar-nav">
            <!--a tag is used for hyperlinks, the class nav-links is a class used in bootstrap for links in navbar and 
            active shows the current link you on. -->
            <a class="nav-link" href="index.php">Home Page</a>
            <a class="nav-link" href="missions.php">Missions</a>
            <a class="nav-link" href="astronaut.php">Astronauts</a>
            <a class="nav-link active" href="attends.php">Attends</a>
            <a class="nav-link" href="target.php">Targets</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- creating a table with table tag, tr is table row and th is table header.-->
    <table class="table table-sm p-2 text-center">
      <tr>
      <th scope="col p-2">Mission Id</th>
      <th scope="col p-2">Astronaut Id</th>
    </tr>
    <?php
      /* connecting to the database by giving the database name, username, password and host.*/
      define("DB_NAME", "space_mission");
      define("DB_USER", "root");
      define("DB_PASSWORD", "");
      define("DB_HOST", "localhost");

      $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
      /* Checking if the connection was successfull or not by using if statement*/
      if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    /*here selecting the data from the table targets and saving into result variable*/
    $sql = "SELECT * FROM attends";
    $result = mysqli_query($connection, $sql);

    /*using if statemnt to see if there's more than one result*/
    /*if the result is more than 0 run a while loop and put all the results from the different coloumn*/
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["mission_id"]. "</td><td>". $row ["astronaut_id"]."</td></tr>";
    }
    }  
    /*if there's 0 result just right o result*/
    else {
    echo "0 results";
    }
    /*close the connection to the database*/
    mysqli_close($connection);
    ?>
    </table>
  </body>
</html>
