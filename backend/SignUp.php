<?php

session_start();
include '../Database/ConnectDatabase.php';



if (isset($_POST["SignUpButton"])) {
  $username = $_POST["SignUpUsername"];
  $password = $_POST["SignUpPassword"];
  $email = $_POST["SignUpEmail"];
  $currentpage = $_POST["Currentpage"];

  $req = "insert into users values(null,'$username','$password','$email',NOW(),null,null,0)";

  $resultat = mysqli_query($con, $req);

  header( "Location: ../pages/$currentpage" );
}

?>
