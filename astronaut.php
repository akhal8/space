<!doctype html>
<html>
    <head>
        <title>Astronaut</title>
        <!--links which are used to connect with bootstrap framework css and js latest version-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Class row and column used to create a space for main title of the page, justify content to move the content to the center,
        bg is used for background and text-white is to make the text white-->
        <div class="row">
            <div class="col d-flex justify-content-center bg-dark text-white">
            <!--using heading 1 for the title-->
            <h1>Astronaut</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border border-dark">
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
            <a class="nav-link active" href="astronaut.php">Astronauts</a>
            <a class="nav-link" href="attends.php">Attends</a>
            <a class="nav-link" href="target.php">Targets</a>
          </div>
        </div>
      </div>
    </nav>
        <!-- class column to create a form, justify content to move the content, text center to move the text, p2 for the padding and 
        Placeholder usedd to give user hint on what to put in the textbox.-->
        <div class="col-md-12 justify-content-center text-center p-2">
        <form action="ast_adding.php" method="POST">
        <div class= "p-1">Astronaut name</div> <input type="text" name="name" placeholder="James"><br>
        <div class= "p-1">Number of Missions</div> <input type="text" name="no_missions" placeholder="10,11,20..."><br>
        <div class= "p-1"><input type="submit"></div>
        </form>
        <a div class="col-md-12 justify-content-center text-center p-2" href='index.php'><button>Main Page</button></a>
        <a div class="col-md-12 justify-content-center text-center p-2" href='view_ast.php'><button>View Astronauts</button></a>
    </body>
</html>