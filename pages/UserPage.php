<?php
$title = 'User Page';
$currentpage = "UserPage.php";
include ('../include/navbar.php');// Include the navbar
?>

<?php if (isset($_SESSION['user'])) {
    ?>


You are connected



    <?php
} ?>


<?php
include ('../include/footer.php');//permet d'inclure la navbar et le <head> en une ligne
?>
