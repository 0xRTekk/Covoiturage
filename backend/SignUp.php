<?php

session_start();
include '../Database/ConnectDatabase.php';



if (isset($_POST["SignUpButton"])) {
  $currentpage = $_POST["Currentpage"];

  $username = $_POST["SignUpUsername"];
  $password = $_POST["SignUpPassword"];
  $email = $_POST["SignUpEmail"];


  $req = "insert into users values(null,'$username','$password','$email',NOW(),null,null,0)";

  $resultat = mysqli_query($con, $req);

  header( "Location: ../pages/$currentpage" );
}

?>
