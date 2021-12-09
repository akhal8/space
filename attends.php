<!doctype html>
<html>
    <head>
        <title>Attends</title>
        <style>
            body {
                background-color: lightgrey;
                text-align: center;
            }
            .form_name{  
                padding: 10px;
            }
            .form_mis{  
                padding: 10px;
            }
            .form_type{  
                padding: 10px;
            }
            .sub_button{  
                padding: 10px;
            }
        </style>
        <!--links which are used to connect with bootstrap framework css and js latest version-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- row and column class used to make space for title, justify-content to move the content, bg for background colour and text-white 
        to make the text white-->
        <div class="row">
            <div class="col d-flex justify-content-center bg-dark text-white">
            <!--using heading 1 for the title-->
            <h1>Attends</h1>
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
        <!-- row and column used to make a space for the form, justify-content to move the content and text center to move the text to center and
        Placeholder usedd to give user hint on what to put in the textbox.-->
        <div class="col-md-12 justify-content-center text-center">
        <!-- form action to connect to another file which allows the form to connect to database using the method POST-->
        <form action="att_adding.php" method="POST">
        <div class= "form_name">Mission id</div> <input type="Integer" name="mission" placeholder="Missionid from mission table"><br>
        <div class= "form_type">Astronaut id</div> <input type="Integer" name="astronaut" placeholder="astronautid from astronaut table"> <br>
        <div class= "sub_button"><input type="submit"></div>
        </form>
        <!-- column class to create a space for the button, justify-content to move the content and text-center to move the text in the middle--> 
        <a class="col-md-12 justify-content-center text-center p-2" href='index.php'><button>Main Page</button></a>
        <a class="col-md-12 justify-content-center text-center p-2" href='view_att.php'><button>View Attends</button></a>
    </body>
</html>