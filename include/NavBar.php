<?php  session_start();
?>

        <?php
        include '../Database/ConnectDatabase.php';
          $_SESSION['WebsiteName'] = 'Template';
         ?>

        <!-- Disconnect -->
        <?php
        if (isset($_GET["Disconnect"]) && !empty($_SESSION['user'])) {

            session_destroy();

              header( "Location: $currentpage" );
        }
        ?>

<!doctype html>
<html lang="en">
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
          <a class="nav-link" href="../pages/Page.php"> Page <span class="sr-only">Page</span></a>
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
                          Sign In
                      </button>
                  </div>
                  <div class="nav-item  active navbar-marge-button">
                      <!-- Sign up Button trigger modal -->
                      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#SignupModal">
                          Sign Up
                      </button>
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
                        <h5 class="modal-title" id="SignupModalLabel">Sign In</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <form action="../backend/SignIn.php" method="post">
                        <input type="text" class="form-control" placeholder="Username" name="SignInUsername" required> <br>
                        <input type="password" class="form-control" placeholder="Password" name="SignInPassword" required>
                         <input type="hidden" name="Currentpage" value="<?php echo $currentpage;?>">
                        <div class="modal-footer">
                          <input type="submit" type="button" class="btn btn-primary" name="SignInButton"  value="Connect">
                        </div>
                      </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Sign up Modal -->
        <div class="modal fade" id="SignupModal" tabindex="-1" role="dialog" aria-labelledby="SignupModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="SignupModalLabel">Sign Up</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <form action="../backend/SignUp.php" method="post">
                        <input type="text" class="form-control" placeholder="Username" name="SignUpUsername" required> <br>
                        <input type="email" class="form-control" placeholder="Email" name="SignUpEmail" required> <br>
                        <input type="password" class="form-control" placeholder="Password" name="SignUpPassword" required> <br>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required> <br>
                        <input type="hidden" name="Currentpage" value="<?php echo $currentpage;?>">
                        <div class="modal-footer">
                          <input type="submit" type="button" class="btn btn-primary" name="SignUpButton"  value="Send">
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content">
