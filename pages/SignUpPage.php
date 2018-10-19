<?php
$title = 'Home';
$currentpage = "home.php";
include ('../include/navbar.php');// Include the navbar
?>
<div class="row">
  <h4 class="text-center">INSCRIPTION</h4>
</div>

<br>

<form action="../backend/SignUp.php" method="post">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Profil:</h5>
      <div class="row">

        <span class="radio">
          <label>
            <input type="radio" name="SignUpType" value="conducteur" checked>Conducteur
          </label>
        </span>
        &nbsp;
        <span class="radio">
          <label>
            <input type="radio" name="SignUpType" value="passager">Passager
          </label>
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

      <br>

      <div class="row">
        <span class="col">
          <input type="password" class="form-control" placeholder="Mot de passe" name="SignUpPassword" id="SignUpPasswordInput" required>
        </span>
        <span class="col">
          <input type="password" class="form-control" placeholder="Confirmation Mot de passe" name="SignUpPasswordConfirmation" id="SignUpPasswordConfirmation" required>
        </span>

      </div>

      <div class="card-1" id="PaswordBoxInfo">
        <bold>Votre mot de passe doit avoir:</bold>
        <ul>
          <li id="PaswordBoxLength" class="ErrorMessage">Au moins <strong>8 caractères</strong></li>
          <li id="PaswordBoxNumber" class="ErrorMessage">Au moins <strong>un chiffre</strong></li>
        </ul>
      </div>
      
      <div class="row">

        <span class="radio">
          Fumeur:&nbsp;&nbsp;&nbsp;
          <label>
            <input type="radio" name="SignUpSmoking" value="1" checked>Oui
          </label>
          &nbsp;
          <label>
            <input type="radio" name="SignUpSmoking" value="0">Non
          </label>
        </span>

      </div>
    </div>
  </div>

  <br>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Informations personnelles:</h5>
      <div class="row">

        <span class="radio">
          <label>
            <input type="radio" name="SignUpGender" value="h" checked>Homme
          </label>
        </span>
        &nbsp;
        <span class="radio">
          <label>
            <input type="radio" name="SignUpGender" value="f">Femme
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
    </div>
  </div>

  <br>

  <div class="card"  id="SigUpCardVehicule">

    <div class="card-body">

      <h5 class="card-title">Voiture</h5>

      <div class="row">
        <span class="col">
          <input type="text" class="form-control" placeholder="Véhicule" name="SignUpCar">
        </span>
        <span class="col">
          <input type="text" class="form-control" placeholder="Moteur" name="SignUpMotor">
        </span>
      </div>

      <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <span class="radio">
          Confort:&nbsp;&nbsp;&nbsp;
          <label>
            <input type="radio" name="SignUpComfort" value="basique" checked>Basique
          </label>
          &nbsp;
          <label>
            <input type="radio" name="SignUpComfort" value="normal">Normal
          </label>
          &nbsp;
          <label>
            <input type="radio" name="SignUpComfort" value="comfortable">Comfortable
          </label>
          &nbsp;
          <label>
            <input type="radio" name="SignUpComfort" value="luxe">Luxe
          </label>
        </span>

      </div>
    </div>
  </div>

  <div class="modal-footer">
    <input type="submit" type="button" class="btn btn-primary" name="SignUpButton"  value="S'inscrire">
  </div>

</form>

<?php
include ('../include/footer.php');
?>
