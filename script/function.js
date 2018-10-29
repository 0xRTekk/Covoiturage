jQuery(document).ready(function ($) {

  /*Getting url info*/
  /*the format of the url should be: http://localhost/     /pages/home.php?type=video&category=hot*/
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



  /*SIGNUP FORM*/
  /*Card vehicule*/
  $('input[type=radio][name=SignUpType]').change(function() {
    if (this.value == 'conducteur') {
      $('#SigUpCardVehicule').show();
    }
    else if (this.value == 'passager') {
      $('#SigUpCardVehicule').hide();
    }
  });

  /*Password strenght*/
  $('#SignUpPasswordInput').on('input',function(){//on input value change

    if(this.value.length < 8){//if the value length is less than 8 character
      $('#PaswordBoxLength').show();
    }else {
      $('#PaswordBoxLength').hide();
    }

    if(this.value.match(/\d+/g) == null){//if there no number in the password
      $('#PaswordBoxNumber').show();
    }else {
      $('#PaswordBoxNumber').hide();
    }

    if (this.value.length < 8 || this.value.match(/\d+/g) == null) {//if the password have more than 8 character and 1 number
      $('#PaswordBoxInfo').show();
    }else {
      $('#PaswordBoxInfo').hide();
    }

    if(this.value.length != $('#SignUpPasswordConfirmation').value){
      $('#SignUpPasswordConfirmation').html('mismatch');
      $('#SignUpPasswordConfirmation').setCustomValidity('Les mot de passes sont diferents');
    }

  });


  /*City name search function Elasticsearch*/

  $("CityName").each(function(){
    //do ajax query to elastic search
    this.id.slice(8);


    //load th result in this div
    this.load();

  });



  //date picker trigger
  $( ".datepicker" ).datepicker({
    maxViewMode: 2,
    language: "fr",
    orientation: "bottom auto",
    todayHighlight: true
  });


  /*Search input for town search*/
  $('.SearchTownInput').on('input',function(e){

    /*Get the id at the end of the input #id*/
    var InputId = this.id.slice(15);

    if ($(".SearchTownInput#" + this.id).val().length > 2) {


      var data = {
        "query": {
          "match" : {
            "nom" : {
              "query" : $(".SearchTownInput#" + this.id).val(),
              "fuzziness": "AUTO"
            }
          }
        }
      }

      $.ajax({
        method: "POST",
        url: "http://localhost:9200/ville/_search?pretty=true",
        crossDomain: true,
        async: false,
        data: JSON.stringify(data),
        dataType : 'json',
        contentType: 'application/json',
      })
      .done(function( data ) {

        $('.SearchTownDrop#SearchTownDrop' + InputId).empty();//reset the search drop


        $(data.hits.hits).each( function() {

          $('.SearchTownDrop#SearchTownDrop' + InputId).append('<span id="SearchProposition' + InputId + '" class="SearchProposition ' + this._source.id + '">' + this._source.nom + '</span>');

        });

        $('.SearchTownDrop#SearchTownDrop' + InputId).show("fast");

        //if a search result is clicked fill input
        $('.SearchProposition').click(function() {

          $(".SearchTownInput#" + InputId).val('test');
          $('.SearchTownDrop#SearchTownDrop' + InputId).hide("fast"); // hide the search bar

        });


      }).fail(function( data ) {
      console.log(data);
    });


  }else {//if the lenght of the search is 3 or lower
    $('.SearchTownDrop#SearchTownDrop' + InputId).hide("fast");
    $('.SearchTownDrop#SearchTownDrop' + InputId).empty();//reset the search drop

  }


  $(".SearchTownInput").click(function() {

    $('.SearchTownDrop#SearchTownDrop' + this.id.slice(15)).show("fast");

  });


});

//if a saerch proposition is clicked
$('.SearchTownDrop').on('click','.SearchProposition', function() {//important to use on(click) because the search proposition are dynamicly added to the page

  var InputId = this.id.slice(17);

  var classList = $(this).attr('class').split(/\s+/);

  var TownId =  classList[1];

  //add the name of the town to the value of the input
  $(".SearchTownInput#SearchTownInput" + InputId).val( $(this).text().trim() );
  $("#SearchTownId" + InputId).text(TownId);

  $('.SearchTownDrop#SearchTownDrop' + InputId).hide("fast");
  $('.SearchTownDrop#SearchTownDrop' + InputId).empty();

});

//if the search input lose the focus
$('.SearchTownInput').on('focusout',function(e){

  if($('.SearchProposition' + ':hover').length) {//if the mouse is hover a search result: dont hide
        return;
  }

 $('.SearchTownDrop#SearchTownDrop' + this.id.slice(15)).hide("fast");


});

//When the search button is clicked
$('#SearchButton').click(function() {


  if ($("#SearchTownIdDepart").text() && $("#SearchTownIdArrivee").text() && $('#SearchDate').val() != '') {
    window.location = "http://localhost/Covoiturage/pages/SearchResult.php?depart=" + $("#SearchTownIdDepart").text() +"&arrivee=" + $("#SearchTownIdArrivee").text() + "&date=" + $('#SearchDate').val();
  }



});








});
