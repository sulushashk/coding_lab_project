<?php
    session_start();

    if(isset($_POST['add_to_card'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['status'];
        $btn = $_POST['id'];



        
        $product = array($name,$price,$quantity);
        if($btn == "Update"){
            $_SESSION[$name] = $product;
            header('location:viewCart.php?value=updated');
        }else if($btn == "Delete"){
            unset($_SESSION[$name]);
            header('location:viewCart.php?value=deleted');
        }
        
    }
?>