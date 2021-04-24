<?php
     include_once 'header.php';
?>
<section class="section">
    <h2>Registration</h2>
    <form  action="signup.inc.php" method="post" class="form">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
        <!-- Name -->
        <?php if (isset($_GET['name'])) { ?>
               <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="name" placeholder="Name"><br>
          <?php }?>
        <!-- Email -->
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" name="email"  placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="email" placeholder="Email"><br>
          <?php }?>
        <!-- Password -->
     	<input type="password" name="password" placeholder="Password"><br>

          <input type="password"  name="re_password" placeholder="Repeat_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
</section>
      
<?php
     include_once 'footer.php';
?>