<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="/Covoiturage/style/style.css">

  <title></title>

</head>
<body>


  <!-- NAVBAR -->
  <ul class="NavBar">
    <li class="NavBarLi"><a class="NavBarA NavBarALeft" href="/Covoiturage/pages/Home.php">Home</a></li>
    <li class="NavBarLi"><a class="NavBarA NavBarALeft" href="/Covoiturage/pages/Home.php">Browse Journey</a></li>
    <li class="NavBarLi"><a class="NavBarA NavBarALeft" href="/Covoiturage/pages/JourneyForm.php"> Submit Journey</a></li>
    <li class="NavBarLi NavBarLiRight"><span class="NavBarA NavBarARight ModalButton" id="ModalButtonSignIn">Sign In</span></li>
    <li class="NavBarLi NavBarLiRight"><a class="NavBarA NavBarARight" href="/Covoiturage/pages/SignUpForm.php">Sign Up</a></li>

  </ul>

  <!-- Navbar sign in modal -->
  <div class="Modal" id="ModalSignIn" >

    <!-- Modal content -->
    <div class="ModalContent">
      <span class="ModalButtonClose" id="ModalButtonCloseSignIn">&times;</span>
      <p>Some text in the Modal..</p>
    </div>

  </div>
