<!doctype html>
<html lang = "en">
    <head>
        <!-- Title of the page-->
        <title>Missions</title>
        <!--links which are used to connect with bootstrap framework css and js latest version-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Creating a row and column class to create a space to put the main heading of the page-->
        <div class="row">
            <div class="col d-flex justify-content-center bg-dark text-white text-center">
            <!--using heading 1 for the title-->
            <h1>Space Mission</h1>
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
            <a class="nav-link active" href="missions.php">Missions</a>
            <a class="nav-link" href="astronaut.php">Astronauts</a>
            <a class="nav-link" href="attends.php">Attends</a>
            <a class="nav-link" href="target.php">Targets</a>
          </div>
        </div>
      </div>
    </nav>
        <!-- Creating a form which connects with another file to save the data inside the database using the method POST-->
        <form action="Mis_adding.php" method="POST">
        <!-- Another column class to put the form inside, justify-content-center to put the column in the middle, 
        text center to move the text in the middle and p is used for the padding. Placeholder usedd to give user hint on what to 
        put in the textbox.-->
        <div class="col-md-12 justify-content-center text-center p-2">
        <div class= "p-1">Mission Name</div> <input type="text" name="name" placeholder="James" required><br>
        <div class= "p-1">Destination</div> <input type="text" name="destination" placeholder="London" required><br>
        <div class= "p-1">Launch date</div> <input type="date" name="date" placeholder="21/08/2021" required><br>
        <div class= "p-1">Mission Type</div> <input type="text" name="type" placeholder="Extreme" required><br>
        <div class= "p-1">Crew Size</div> <input type="Number" name="crewsize" placeholder="more than 1" required><br>
        <div class= "p-1">Target Id</div> <input type="Number" name="target_no" placeholder="1,2,3..." required><br>
        <div class= "p-1"><input type="submit"></div>
        </div>
        </form>
        <div class="row">
        <div class="col-md-12 text-center text-white p-2">
        <!-- Creating a link with a button to move to a home page and view mission.-->
        <a class="btn btn-info" href="index.php" role="button">Main Page</a>
        <!--<a class="col-md-12 justify-content-center text-center" href='index.php'><button>Main Page</button></a>-->
        <a class="btn btn-info" href="view_mis.php" role="button">View Mission</a>
        <!--<a class="col-md-12 justify-content-center text-center p-2" href='view_mis.php'><button>View Missions</button></a>-->
      </div>
    </div>
  </body>
</html>