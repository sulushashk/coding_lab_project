<?php
include_once 'header.php';
?>
<link href="css/profile.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<body>
  <div class="container">
    <div class="row profile">
      <div class="col-md-3">
        <div class="profile-sidebar">
          <!-- SIDEBAR USERPIC -->
          <div class="profile-userpic">
            <!-- <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> -->


          </div>
          <!-- END SIDEBAR USERPIC -->
          <!-- SIDEBAR USER TITLE -->
          <div class="profile-usertitle">
            <div class="profile-usertitle-name">
              <span class="hidden-md">Menu</span>
            </div>
            <div class="profile-usertitle-job">
            </div>
          </div>
          <!-- END SIDEBAR USER TITLE -->
          <!-- SIDEBAR MENU -->
          <div class="profile-usermenu">
            <ul class="nav">
              <li class="active">
                <a href="#">
                  <i class="glyphicon glyphicon-home"></i>
                  <span class="hidden-md">Personal<span> </a>
              </li>
              <li>
                <a href="#">
                  <i class="glyphicon glyphicon-user"></i>
                  <span class="hidden-md">Delivery Address<span> </a>
              </li>
              <li>
                <a href="#">
                  <i class="glyphicon glyphicon-ok"></i>
                  <span class="hidden-md">Orders <span></a>
              </li>
              <li>
                <a href="#">
                  <i class="glyphicon glyphicon-flag"></i>
                  <span class="hidden-md">My Wishlist <span></a>
              </li>
              <li>
                <a href="products.php">
                  <i class="glyphicon glyphicon-shopping-cart"></i>
                  <span class="hidden-md">Shopping Bag<span> </a>

              </li>

            </ul>
          </div>
          <!-- END MENU -->
        </div>
      </div>
      <div class="col-md-9 order-content">

        <div class="form_main col-md-4 col-sm-5 col-md-7">
          <h4 class="heading"><strong>Personal </strong> Contact <span></span></h4>
          <div class="form">
            <form action="" method="" id="contactFrm" name="contactFrm">
              <input type="text" required="" placeholder="Name" value="" name="name" class="txt">
              <input type="text" required="" placeholder="Email" value="" name="email" class="txt">
              <input type="password" required="" placeholder="Change Pwd" value="" name="password" class="txt"><br>
              <button type="button" onclick="btn()" class="btn btn-default">Update</button>
            </form>
          </div>
        </div>

      </div>


    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    function btn() {
      alert("Your password successfully changed!");
    }
  </script>
  <?php
  include_once 'footer.php';
  ?>