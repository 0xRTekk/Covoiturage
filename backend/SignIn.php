<?php

session_start();
include '../Database/ConnectDatabase.php';



if (isset($_POST["SignInButton"]) && empty($_SESSION['user'])) {//IF click on connect and no user session
    $username = $_POST["SignInUsername"];
    $password = $_POST["SignInPassword"];
    $currentpage = $_POST["Currentpage"];

    $req = "select * from membres where mel = '$username' and pass ='$password'"; //Verrify if the user and password are true

    $resultat = mysqli_query($con, $req); //result of the request
    $lig = mysqli_fetch_assoc($resultat); //result line by line


    if (mysqli_num_rows($resultat) > 0) {//If a result is found

        $_SESSION["user"] = $username;

        header( "Location: ../pages/$currentpage" );
    }else {
      header( "Location: ../pages/$currentpage" );
    }
}
?>
