
<?php
    include_once "headerA4.php";
    include "menu.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        if (validate())
        {
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $_SESSION['password'] = $hash;
            
            $servername = "localhost";
            $dbname = "eternal_db";

            // Create connection
            $conn = new mysqli($servername, "root", "admin", $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO user (user_name, email, password)
            VALUES ($username, $email, $hash)";

            if ($conn->query($sql) === TRUE) {
                echo "Account created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $dateQuery = "SELECT date_created FROM user WHERE user_name=$username AND email=$email";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $_SESSION['dateCreated'] = $result;
            } else {
                echo "0 results";
                
            }
            
            $conn->close();
        }
    }
    
    
?>
  <main class="content">
  <h1>Profile</h1>
  <?php
  if ($_SESSION['isLoggedIn']){
      echo '<button onclick="window.location.href = \'profileform.php\';">Edit</button>';
      echo '<p> Eternal Tag: '.$_SESSION['username'].'</p>';
      echo '<p> Email: '.$_SESSION['email'].'</p>';
      echo '<p> Date Created: '.$_SESSION['dateCreated'].'</p>';
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
