<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Space Mission</title>
        <!--links which are used to connect with bootstrap framework css and js latest version-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <!-- background to put the image in the background of the page-->
    <body background="space.jpg">
        <!-- Using bootstrap to create a class row which create a space like a row at the top of the page.
        Inside the space created a column which uses the whole space of row to add a heading in black colour and in the middle of the page.-->
        <div class="row">
            <div class="col d-flex justify-content-center text-white">
            <!--using heading 1 for the title-->
            <h1>Space Mission</h1>
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
            <a class="nav-link active" href="index.php">Home Page</a>
            <a class="nav-link" href="missions.php">Missions</a>
            <a class="nav-link" href="astronaut.php">Astronauts</a>
            <a class="nav-link" href="attends.php">Attends</a>
            <a class="nav-link" href="target.php">Targets</a>
          </div>
        </div>
      </div>
    </nav>
        <!-- Another row and col class to put the button and link inside, it would have white text and padding 5 around.-->
        <div class="row">
        <div class="col-md-12 text-center text-white p-5">
        <!-- Creating a heading with heading 3 and than linking to another pages with buttons-->
        <h3>Missions</h3>
            <a class="btn btn-white" href="missions.php" role="button">Add Missions</a>
            <a href='view_mis.php'><button>View Missions</button></a>
        <h3>Astronauts</h3>
            <a href='astronaut.php'><button>Add Astronauts</button></a>
            <a href='view_ast.php'><button>View Astronauts</button></a>
        <h3>Attends</h3>
            <a href='attends.php'><button>Add attends</button></a>
            <a href='view_att.php'><button>View Attends</button></a>
        <h3>Targets</h3>
            <a href='target.php'><button>Add Targets</button></a>
            <a href='view_tar.php'><button>View Targets</button></a>
        </div>    
      </div>
    </body>
</html>