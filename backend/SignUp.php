<?php

session_start();
include ('../Database/ConnectDatabase.php');



if (isset($_POST["SignUpButton"])) {
  $mel = $_POST["SignUpEmail"];
  $pseudo = $_POST["SignUpUsername"];

  $pass = $_POST["SignUpPassword"];
  $passConfirmation = $_POST["SignUpPasswordConfirmation"];

  $nom = $_POST["SignUpLastname"];
  $prenom = $_POST["SignUpFirstname"];

  $tel_mobile = $_POST["SignUpPhone"];

  $sexe = $_POST["SignUpGender"];

  $fumeur = $_POST["SignUpSmoking"];

  $voiture = $_POST["SignUpCar"];
  $moteur = $_POST["SignUpMotor"];

  $annee_naissance = $_POST["SignUpYearBorn"];

  $type = $_POST["SignUpType"];

  $confort = $_POST["SignUpComfort"];

  if ($pass == $passConfirmation && is_numeric($tel_mobile) && [ $sexe == "h" || $sexe == "f" ] && [ $fumeur == "0" || $fumeur == "1" ] && is_numeric($annee_naissance) &&
  [ $type == "conducteur" || $type == "passager" ] && [ $confort == "basique" || $confort == "normal" || $confort == "comfortable" || $confort == "luxe"]) {

    if ($type == "passager") {
      $voiture = "";
      $moteur = "";
      $confort = "";
    }
    $req = "insert into membres values('$mel','$pseudo','$pass','$nom','$prenom','$tel_mobile','$sexe','$fumeur','$voiture','$moteur','','$annee_naissance','','$type','$confort')";

    $resultat = mysqli_query($con, $req);
  }

  header( "Location: ../pages/home.php" );
}

?>
