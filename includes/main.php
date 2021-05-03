if (isset($_POST["submit"])) {
    
    $username = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $re_pass = $_POST["re_password"];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($username, $email, $pass, $re_pass) !== false){
        header("location:../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username) !== false){
        header("location:../signup.php?error=invalidUid");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location:../signup.php?error=invalidEmail");
        exit();
    }
    if(pwdMatch($pass, $re_pass) !== false){
        header("location:../signup.php?error=passdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false){
        header("location:../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username,$email, $pass);
}
    else{
        header("location:../signup.php");
        exit();
    }