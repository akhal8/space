<!doctype html>
<html lang = "en">
    <head>
        <title>Targets</title>
    <!--links which are used to connect with bootstrap framework css and js latest version-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- vlass row and column to create a space for the heading, justify-content-center to move the column to the center,
        bg-dark to make the background dark and text-white to make the text white-->
        <div class="row">
            <div class="col d-flex justify-content-center bg-dark text-white">
            <!--using heading 1 for the title-->
            <h1>Targets</h1>
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
            <a class="nav-link" href="attends.php">Attends</a>
            <a class="nav-link active" href="target.php">Targets</a>
          </div>
        </div>
      </div>
    </nav>
        <!-- Creating a form which connects with another file to save the data inside the database using the method POST and 
        Placeholder usedd to give user hint on what to put in the textbox.-->
        <!-- Class p-2 is used for padding-->
        <form action="tar_adding.php" method="POST">
        <div class="col-md-12 justify-content-center text-center">
        <div class= "p-2">Target name</div> <input type="text" name="name" placeholder="Target name" required><br>
        <div class= "p-2">Date of First Mission</div> <input type="date" name="first_missions" placeholder="Date of first mission" required><br>
        <div class= "p-2">Type of Mission</div> <input type="text" name="missions" placeholder="Type of mission" required><br>
        <div class= "p-2">Number of Mission:</div> <input type="text" name="target_num" placeholder="Mission no for targets" required><br>
        <div class= "p-2"><input type="submit"></div>
        </div>
        </form>
        <!-- col class use to make a space for the link and button, justify-content to move the content to the center and text-center to move the text center-->
        <a div class="col-md-12 justify-content-center text-center p-2" href='index.php'><button>Main Page</button></a>
        <a div class="col-md-12 justify-content-center text-center p-2" href='view_tar.php'><button>View targets</button></a>  
    </body>
</html>