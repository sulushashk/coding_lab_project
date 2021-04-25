<?php

if(isset($_POST["submit"])) {

	$username = $_POST["name"];
	$pass = $_POST["password"];

	require_once 'db.inc.php';
	require_once 'functions.inc.php';

	if(emptyInputLogin($username, $pass) !== false){
        header("location:../login.php?error=emptyinput");
        exit();
    }

	loginUser($conn, $username, $pass);
}
else{
	header("location:../login.php");
	exit();
}