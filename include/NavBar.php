<?php  session_start();
?>

        <?php
        include '../Database/ConnectDatabase.php';
          $_SESSION['WebsiteName'] = 'Covoit';
         ?>

        <!-- Disconnect -->
        <?php
        if (isset($_GET["Disconnect"]) && !empty($_SESSION['user'])) {

            session_destroy();

              header( "Location: $currentpage" );
        }
        ?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">


    <link rel="stylesheet" href="../style/style.css">



    <title><?php if (isset($title)) {echo $title;}
else {echo $_SESSION['WebsiteName'];} ?></title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./home.php"><?php echo $_SESSION['WebsiteName']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="../pages/JourneyCard.php"> Page <span class="sr-only">Page</span></a>
        </li>

        <li class="nav-item active">
          <input type="text" class="form-control SearchTownInput" placeholder="Départ" id="SearchTownInputDepart">
          <span id="SearchTownIdDepart" class="SearchTownId" hidden></span>
          <div  class="SearchTownDrop" id="SearchTownDropDepart">
          </div>
        </li>
        <li class="nav-item active">
          <input type="text" class="form-control SearchTownInput" placeholder="Arrivée" id="SearchTownInputArrivee">
          <span id="SearchTownIdArrivee" class="SearchTownId" hidden></span>
          <div  class="SearchTownDrop" id="SearchTownDropArrivee">
          </div>
        </li>
        <li class="nav-item active">
          <input type="date" class="form-control" id="SearchDate">
        </li>


        <li class="nav-item active">
          <button class="btn btn-circle" id="SearchButton">
              <svg class="IconStyle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8">
                <path d="M3.5 0c-1.93 0-3.5 1.57-3.5 3.5s1.57 3.5 3.5 3.5c.59 0 1.17-.14 1.66-.41a1 1 0 0 0 .13.13l1 1a1.02 1.02 0 1 0 1.44-1.44l-1-1a1 1 0 0 0-.16-.13c.27-.49.44-1.06.44-1.66 0-1.93-1.57-3.5-3.5-3.5zm0 1c1.39 0 2.5 1.11 2.5 2.5 0 .66-.24 1.27-.66 1.72-.01.01-.02.02-.03.03a1 1 0 0 0-.13.13c-.44.4-1.04.63-1.69.63-1.39 0-2.5-1.11-2.5-2.5s1.11-2.5 2.5-2.5z"/>
              </svg>
          </button>
        </li>


      </ul>
      <form class="form-inline my-2 my-lg-0">



        <?php
              if( isset($_SESSION['user']) && !empty($_SESSION['user']) )
              { ?>

                  <a href="UserPage.php" class="btn btn-primary"> User only</a>


        <?php    }   ?>

        <!-- Show disconnect button if a user session exist -->
          <?php
                if( isset($_SESSION['user']) && !empty($_SESSION['user']) )
                { ?>

                  <a href="home.php?Disconnect" class="btn btn-primary"> Disconnect</a>

                  <!-- Show signin and signup button if no user session exist -->
          <?php    }

                else
                { ?>

                  <div class="nav-item navbar-marge-button">
                      <!-- Sign in Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SigninModal">
                          Connexion
                      </button>
                  </div>
                  <div class="nav-item  active navbar-marge-button">
                      <!-- Sign up Button -->
                      <a class="btn btn-secondary" href="./SignUpPage.php">Inscription</a>
                  </div>


          <?php       } ?>
      </form>
    </div>
  </nav>



  <!-- Sign in Modal -->
        <div class="modal fade" id="SigninModal" tabindex="-1" role="dialog" aria-labelledby="SigninModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="SignupModalLabel">Connexion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <form action="../backend/SignIn.php" method="post">
                        <input type="text" class="form-control" placeholder="E-mail" name="SignInUsername" required> <br>
                        <input type="password" class="form-control" placeholder="Mot de passe" name="SignInPassword" required>
                         <input type="hidden" name="Currentpage" value="<?php echo $currentpage;?>">
                        <div class="modal-footer">
                          <input type="submit" type="button" class="btn btn-primary" name="SignInButton"  value="Se connecter">
                        </div>
                      </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="container content">
