<?php
include_once 'header.php';
?>
<?php
require_once 'includes/db.inc.php';

if (isset($_POST['add_to_card'])) {
    if (isset($_SESSION['category_id'])) {
        $session_array_id = array_column($_SESSION['category_id'], "id");

        if (!in_array($_GET['id'], $session_array_id)) {
            $session_array = array(
                'id' => $_GET['id'],
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
            "price" => $_POST['price'],
            "status" => $_POST['status']
        );
        $_SESSION['category_id'][] = $session_array;
    }
}
?>
<div class="container-fluid">
        <h2 class="text-center">Shopping bag</h2><br>

        <?php
        $total = 0;
        $output = "";
        $output .= "
    <table class='table table-bordered table-striped'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Total</th>
                <th>Delete</th>
            </tr>
            ";

        if (!empty($_SESSION['category_id'])) {
            foreach ($_SESSION['category_id'] as $key => $value) {
                $output .= "
                    <tr>
                    <td>" . $value['id'] . "</td>
                    <td>" . $value['name'] . "</td>
                    <td>" . $value['price'] . "</td>
                    <td>" . $value['status'] . "</td>
                    <td>$" . number_format($value['price'] * $value['status'],2) . "</td>
                    <td>
                    <a href='products.php?action=remove&id=" . $value['id'] . "'>
                    <button class='btn btn-danger'>Remove</button>
                    </a>
                    </td>
                    </tr>
                    ";

                $total = $total + $value['status'] * $value['price'];
            }
            $output .= "
            <tr>
            <td colspan='3'></td>
            <td></b>Total Price</b></td>
            <td>" . number_format($total, 2) . "</td>
            <td>
            <a href='products.php?action=clearall'>
            <button class='btn btn-warning'>Clear all</button>
            </a>
            <a href='pay.php?action=buy'>
            <button class='btn btn-primary'>Buy</button>
            </a>
            </td>
        </tr>
    ";
        }
        echo $output;
        ?>
</div>
<?php
if(isset($_GET['action'])){
    if($_GET['action'] == "clearall"){
        unset($_SESSION['category_id']);
    }
    
    if($_GET['action'] == "remove") {
    
    foreach($_SESSION['category_id'] as $key => $value) {
        if($value['id'] == $_GET['id']) {
            unset($_SESSION['category_id'][$key]);
        }
    }
}
}
?>
