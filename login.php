<?php
     include_once 'header.php';
?>
<section class="section">
    <h2>Log In</h2>
    <form  action="includes/login.inc.php" method="post" class="form">
    <?php
     if(isset($_GET["error"])) {
          if($_GET["error"] == "emptyinput") {
               echo "<p>Fill in all fields!<p>";
          }
          else if($_GET["error"] == "wronglogin") {
               echo "<p>Incorrect login information!<p>";
          }
     }
     ?>
          <input type="text" name="name" placeholder="Name/Email"><br>
          
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" name="submit">Log In</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</section>
      
<?php
     include_once 'footer.php';
?>