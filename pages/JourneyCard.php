<?php
$title = 'Trajet';
$currentpage = "JourneyCard.php";
include ('../include/navbar.php');// Include the navbar

include ('../Database/ConnectDatabase.php');
?>


<?php //Get Journey Information

if (isset($_GET['id'])) {

  $JourneyId = $_GET['id'];

  /*GET all the data for the journey*/
  $req = "SELECT * FROM trajet WHERE num_trajet = $JourneyId";
  $CardData = mysqli_query($con, $req); //result of the request

  if (mysqli_num_rows($CardData) > 0) {

    $LineCardData = mysqli_fetch_assoc($CardData);

    $VilleDepartID = $LineCardData['depart_ville'];
    $VilleArriveeID = $LineCardData['arrivee_ville'];
    $Price = $LineCardData['prix'];


    /*Search for the departure town Name*/
    $req = "SELECT * FROM ville WHERE id = $VilleDepartID";
    $VilleDepart = mysqli_query($con, $req);
    $VilleDepartData = mysqli_fetch_assoc($VilleDepart);
    $VilleDepartName = $VilleDepartData['nom'];
  

    /*Search for the depart town Name*/
    $req = "SELECT * FROM ville WHERE id = $VilleArriveeID";
    $VilleArrivee = mysqli_query($con, $req);
    $VilleArriveeData = mysqli_fetch_assoc($VilleArrivee);
    $VilleArriveeName = $VilleArriveeData['nom'];



  ?>

  <div class="card">
    <div class="card-body">

      <!-- Title card -->
      <span class="JourneyCardDestination"> <?php echo $VilleDepartName; ?></span>

        <svg class="IconStyle" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 8 6">
          <path d="M5 0v2h-5v2h5v2l3-3.03-3-2.97z" transform="translate(0 1)" />
        </svg>

      <span class="JourneyCardDestination"><?php echo $VilleArriveeName; ?></span>


    <!-- Price -->
    <span class="float-right"> <span class="JourneyCardPrice"> <?php echo $Price; ?></span>
      <svg  class="IconStyle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8">
        <path d="M6 0c-1.86 0-3.4 1.28-3.84 3h-1.91l-.25 1h2.01c0 .35.07.68.16 1h-1.97l-.19 1h2.56c.7 1.19 1.97 2 3.44 2 .73 0 1.41-.21 2-.56v-1.22c-.53.48-1.22.78-2 .78-.89 0-1.67-.39-2.22-1h2.22l.16-1h-2.97c-.11-.32-.19-.64-.19-1h3.34l.16-1h-3.31c.41-1.16 1.51-2 2.81-2 .66 0 1.26.21 1.75.56l.16-1.06c-.57-.31-1.21-.5-1.91-.5z"
  transform="translate(-1)" />
        </svg>
    </span>

    <br>
    <!-- Date and time -->
    <span> <?php echo "string"; ?> </span>

    <div class="card-text">
      test
    </div>
    </div>
  </div>



  <?php
    }
}
 ?>



<?php
include ('../include/footer.php');//permet d'inclure la navbar et le <head> en une ligne
?>
