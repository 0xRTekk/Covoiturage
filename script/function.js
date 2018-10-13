jQuery(document).ready(function ($) {

  /*Getting url info*/
  /*the format of the url should be: http://localhost/Covoiturage/pages/home.php?type=video&category=hot*/
  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

    for (i = 0; i < sURLVariables.length; i++) {
      sParameterName = sURLVariables[i].split('=');

      if (sParameterName[0] === sParam) {
        return sParameterName[1] === undefined ? true : sParameterName[1];
      }
    }
  };



  /*MODAL*/

  // When the user clicks the button, open the modal
  $(".ModalButton").click( function() {

    var modalid = this.id.slice(11);


    $(".Modal#Modal" + modalid).toggle('slide', {
      duration: 500,
      direction: 'up'
    }).css("background-color","rgba(0,0,0,0.4)");


  });

  // When the user clicks the button, open the modal
  $(".ModalButtonClose").click( function() {

    var modalid = this.id.slice(16);

    $(".Modal#Modal" + modalid).toggle();

  });
/*
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

*/





});
