<?php
include_once 'header.php';
?>
<link rel="stylesheet" href="css/form.css">
     <form action="includes/signup.inc.php" method="post" class="form">
         <h2>Registration</h2>
          <?php
          if (isset($_GET["error"])) {
               if ($_GET["error"] == "emptyinput") {
                    echo "<p class='error'>Fill in all fields!<p>";
               } else if ($_GET["error"] == "invalidUid") {
                    echo "<p class='error'>Choose a proper username!<p>";
               } else if ($_GET["error"] == "invalidEmail") {
                    echo "<p class='error'>Choose a proper email!<p>";
               } else if ($_GET["error"] == "passdontmatch") {
                    echo "<p class='error'>Passwords doesn't match!<p>";
               } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p class='error'>Something went wrong!<p>";
               } else if ($_GET["error"] == "usernametaken") {
                    echo "<p class='error'>Username already taken!<p>";
               } else if ($_GET["error"] == "success") {
                    echo "<p class='success'>You have signed up!<p>";
               }
          }
          ?>
          <input type="text" name="name" placeholder="Name"><br>

          <input type="text" name="email" placeholder="Email"><br>

          <input type="password" name="password" placeholder="Password"><br>

          <input type="password" name="re_password" placeholder="Repeat_Password"><br>

          <button type="submit" name="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
<?php
include_once 'footer.php';
?>