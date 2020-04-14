
<?php
    include_once "headerA4.php";
?>

<?php
	include "menu.php"
?>
  <main class="content">
  <h1>Profile</h1>
  <?php
  if ($_SESSION['isLoggedIn']){
      echo '<button onclick="window.location.href = \'profileform.php\';">Edit</button>';
  } else {
      echo '<p>You\'re not logged in!</p>';
      echo '<button onclick="window.location.href = \'loginform.php\';">Log In</button><br/>';
      echo '<button onclick="window.location.href = \'registrationform.php\';">Register</button>';
  }
  ?>
  </main>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"></script>


<?php
    include "footerA4.php";
?>
