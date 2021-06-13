<?php
include_once 'header.php';
?>

<body>
    <div class="container-md">
        <div class="uno">
            <img src="images/ipad.png">
        </div>
    </div>

    <?php
  require_once 'includes/db.inc.php';
  ?>
  <?php
  if (isset($_POST['add_to_card'])) {
    if (isset($_SESSION['category_id'])) {
      $session_array_id = array_column($_SESSION['category_id'], "id");

      if (!in_array($_GET['id'], $session_array_id)) {
        $session_array = array(
          'id' => $_GET['id'],
          "category_id" => $_POST['category_id'],
          "name" => $_POST['name'],
          "price" => $_POST['price'],
          "status" => $_POST['status']
        );
        $_SESSION['category_id'][] = $session_array;
      }
    } else {

      $session_array = array(
        'id' => $_GET['id'],
        "name" => $_POST['name'],
        "description" => $_POST['description'],
        "price" => $_POST['price'],
        "status" => $_POST['status']
      );
      $_SESSION['category_id'][] = $session_array;
    }
  }
  ?>
  <div class="container">
  <div class="position-relative">
  <div class="position-absolute me-5"></div>

        <?php

        $sql = "SELECT * FROM products WHERE category_id=2;";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) { ?>

          
            <form method="post" action="products.php?id=<?= $row['id'] ?>">
              <div class="col-md-4">
                <div class="section">
                <li class="one_third">
                  <article class="element">
                    <figure>
                      <img src="images/<?= $row['image'] ?>" style='height: 200px;'>
                      <figcaption><a href="pay.php"><i class="fa fa-eye"></i></a></figcaption>
                    </figure>
                    <p><?= $row['name']; ?></p>
                    <p><?= $row['description']; ?></p>
                    <footer><a href="pay.php"><?= number_format($row['price'], 2); ?></p></a></footer>
                    <input type="hidden" name="name" value="<?= $row['name'] ?>">
                    <input type="hidden" name="price" value="<?= $row['price'] ?>">
                    <input type="number" name="status" value="1" class="form-control">
                    <input type="submit" name="add_to_card" class="btn btn-primary my-2" value="Choose">
                  </article>
                </li>
              </div></div>
            </form>
          

        <?php
        }
        ?>
      </ul>
    </div>
  </div>
    <?php
    include_once 'footer.php';
    ?>