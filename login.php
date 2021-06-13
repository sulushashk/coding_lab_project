<?php
include_once 'header.php';
?>

<link rel="stylesheet" href="css/style2.css">
<body>
     <form action="includes/login.inc.php" method="post" class="form">
         <h2>Login</h2>
          <?php
          if (isset($_GET["error"])) {
               if ($_GET["error"] == "emptyinput") {
                    echo "<p class='error'>Fill in all fields!<p>";
               } else if ($_GET["error"] == "wronglogin") {
                    echo "<p class='error'>Incorrect login information!<p>";
               }
          }
          ?>
          <input type="text" name="name" placeholder="Name/Email"><br>

          <input type="password" name="password" placeholder="Password"><br>

          <button type="submit" name="submit">Log In</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>

<?php
include_once 'footer.php';
?>