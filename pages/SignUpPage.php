<?php
$title = 'Home';
$currentpage = "home.php";
include ('../include/navbar.php');// Include the navbar
?>

<form action="../backend/SignUp.php" method="post">

  <div class="row">

    <span class="radio">
      <label>
        <input type="radio" name="SignUpType" value="Conducteur" checked>Conducteur
      </label>
    </span>
    &nbsp;
    <span class="radio">
      <label>
        <input type="radio" name="SignUpType" value="Passager">Passager
      </label>
    </span>

  </div>

  <div class="row">

    <span class="radio">
      <label>
        <input type="radio" name="SignUpGender" value="Homme" checked>Homme
      </label>
    </span>
    &nbsp;
    <span class="radio">
      <label>
        <input type="radio" name="SignUpGender" value="Femme">Femme
      </label>
    </span>

  </div>

  <br>

  <div class="row">
    <span class="col">
      <input  type="text" class="form-control" placeholder="Prenom" name="SignUpFirstname" required>
    </span>
    <span class="col">
      <input type="text" class="form-control" placeholder="Nom" name="SignUpLastname" required>
    </span>
  </div>

  <br> <br>

  <div class="row">
    <span class="col">
      <input type="email" class="form-control" placeholder="E-mail" name="SignUpEmail" required>
    </span>
    <span class="col">
      <input class="form-control" placeholder="Année de naissance (AAAA)" name="SignUpYearBorn" required>
    </span>
  </div>

  <br><br>

  <div class="row">
    <span class="col">
      <input type="tel" class="form-control" placeholder="Telephone Mobile" name="SignUpPhone" required>
    </span>

    <div class="custom-control custom-checkbox col">
      <input type="checkbox" class="custom-control-input" id="CheckMobile">
      <label class="custom-control-label" for="CheckMobile">Je ne souhaite pas que mon numéro de téléphone apparaisse</label>
    </div>

  </div>

  <br><br>

  <div class="row">
    Votre mot de passe doit contenir au minimum 8 caractères dont au moins un chiffre:
  </div>
  <br>
  <div class="row">
    <span class="col">
      <input type="password" class="form-control" placeholder="Mot de passe" name="SignUpPassword" required>
    </span>
    <span class="col">
      <input type="password" class="form-control" placeholder="Confirmation Mot de passe" name="SignUpPasswordConfirmation" required>
    </span>

  </div>

  <br>


<div class="row">
    <span class="col">
      <input type="text" class="form-control" placeholder="Pseudo" name="SignUpUsername" required> <br>
    </span>
    <span class="col">
      <button type="button" class="btn btn-primary">Photo de profil</button>
    </span>
</div>

<div class="row">

  <span class="radio">
    Fumeur:&nbsp;&nbsp;&nbsp;
    <label>
      <input type="radio" name="SignUpSmoking" value="Yes" checked>Oui
    </label>
  &nbsp;
    <label>
      <input type="radio" name="SignUpSmoking" value="No">Non
    </label>
  </span>

</div>

<br>


<div class="row">

  <span class="col">
    <input type="text" class="form-control" placeholder="Véhicule" name="SignUpCar">
  </span>

</div>

  <div class="modal-footer">
    <input type="submit" type="button" class="btn btn-primary" name="SignUpButton"  value="Send">
  </div>
</form>

<?php
include ('../include/footer.php');//permet d'inclure la navbar et le <head> en une ligne
?>
