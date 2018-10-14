<?php

session_start();
include '../Database/ConnectDatabase.php';



if (isset($_POST["SignUpButton"])) {
  $mel = $_POST["SignUpEmail"];
  $pseudo = $_POST["SignUpUsername"];
  $pass = $_POST["SignUpPassword"];
  $nom = $_POST["SignUpLastname"];
  $prenom = $_POST["SignUpFirstname"];
  $tel_mobile = $_POST["SignUpPhone"];
  $sexe = $_POST["SignUpGender"];
  $fumeur = $_POST["SignUpSmoking"];
  $voiture = $_POST["SignUpCar"];
  $moteur = $_POST["SignUpMotor"];
  $annee_naissance = $_POST["SignUpYearBorn"];
  $type = $_POST["SignUpSignUpType"];
  $confort = $_POST["SignUpComfort"];




  $req = "insert into membres values('$mel','$pseudo','$pass','$email',NOW(),null,null,0)";

  $resultat = mysqli_query($con, $req);
  echo $req;
//  header( "Location: ../pages/home.php" );
}

?>
