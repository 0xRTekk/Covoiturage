<?php
$title = 'Recherche';
$currentpage = "SearchResult.php";
include ('../include/navbar.php');// Include the navbar
include ('../Database/ConnectDatabase.php');
?>

<?php/*IF the search have the id for the two town from the url*/
  if (isset($_GET['depart']) && isset($_GET['arrivee']) && isset($_GET['date']))
  {
    $SearchDepartID = $_GET['depart'];
    $SearchArriveeID = $_GET['arrivee'];
    $SearchDate = $_GET['date'];

    $SearchResult = "SELECT * "






  }

?>
<div class="py-2 col-md-6 col-lg-4 col-xl-3">
  <div class="card">
    <div class="card-body">
      <div class="text-center">
        <span class="JourneyCardDestination">Paris</span>

          <svg class="IconStyle" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 8 6">
            <path d="M5 0v2h-5v2h5v2l3-3.03-3-2.97z" transform="translate(0 1)" />
          </svg>

        <span class="JourneyCardDestination">Ambert</span>
      </div>
      <div class="card-text">
          50
      </div>
    </div>
  </div>
</div>



<?php
include ('../include/footer.php');//permet d'inclure la navbar et le <head> en une ligne
?>
