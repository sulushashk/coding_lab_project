<?php
     include_once 'header.php';
?>
<section class="section">
    <h2>Log In</h2>
    <form  action="login.inc.php" method="post" class="form">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
        <!-- Email -->
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" name="email"  placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="email" placeholder="Email"><br>
          <?php }?>
        <!-- Password -->
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Log In</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</section>
      
<?php
     include_once 'footer.php';
?>