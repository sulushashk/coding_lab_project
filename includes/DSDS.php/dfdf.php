<?php

function emptyInputSignup($username, $email, $pass, $re_pass) {
    $result;
    if(empty($username) || empty($email) || empty($pass) || empty($re_pass)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pass, $re_pass) {
    $result;
    if($pass !== $re_pass){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location:../signup.php?error= stmtfailed");
    exit(); 
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt); 
}

function createUser($conn, $username,$email, $pass) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersPsw) VALUES(?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location:../signup.php?error= stmtfailed");
    exit(); 
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt); 
    header("location:../signup.php?error=none");
        exit();
}

function emptyInputLogin($username, $pass) {
    $result;
    if(empty($username) || empty($pass)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pass) {
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false) {
    header("location:../login.php?error= wronglogin");
    exit(); 
    }

    $pwdHashed = $uidExists["usersPsW"];
    $checkPwd = password_verify($pass, $pwdHashed);

    if($checkPwd === false) {
        header("location:../login.php?error= wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["username"] = $uidExists["usersName"];
        header("location:../index.php");
        exit(); 
    }
}