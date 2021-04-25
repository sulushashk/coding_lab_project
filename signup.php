<?php
     include_once 'header.php';
?>
<section class="section">
    <h2>Registration</h2>
    <form  action="includes/signup.inc.php" method="post" class="form">
     <?php
     if(isset($_GET["error"])) {
          if($_GET["error"] == "emptyinput") {
               echo "<p>Fill in all fields!<p>";
          }
          else if($_GET["error"] == "invalidUid") {
               echo "<p>Choose a proper username!<p>";
          }
          else if($_GET["error"] == "invalidEmail") {
               echo "<p>Choose a proper email!<p>";
          }
          else if($_GET["error"] == "passdontmatch") {
               echo "<p>Passwords doesn't match!<p>";
          }
          else if($_GET["error"] == "stmtfailed") {
               echo "<p>Something went wrong!<p>";
          }
          else if($_GET["error"] == "usernametaken") {
               echo "<p>Username already taken!<p>";
          }
          else if($_GET["error"] == "none") {
               echo "<p>You have signed up!<p>";
          }
     }
     ?>
          <input type="text" name="name" placeholder="Name"><br>
          
          <input type="text" name="email"  placeholder="Email"><br>
     
     	<input type="password" name="password" placeholder="Password"><br>

          <input type="password"  name="re_password" placeholder="Repeat_Password"><br>

     	<button type="submit" name="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
     
</section>
      

<?php
     include_once 'footer.php';
?>