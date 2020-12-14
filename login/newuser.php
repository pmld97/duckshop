<?php
require_once ("include/session.php");
require_once ("include/connection.php");
require_once ("include/functions.php");
//confirm_logged_in();

if(isset($_POST["submit"])){

    $username = trim(htmlspecialchars($_POST['user']));
    $password = trim(htmlspecialchars($_POST['pass']));
    $iterations = ['cost' => 15];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $iterations);
    $result = $connection->prepare("INSERT INTO users (user, pass) VALUES (?,?)");
    $result->bindParam(1, $username);
    $result->bindParam(2, $hashed_password);
    $result->execute();
    if ($result){
        redirect_to("Loginpage.php");
    }else{
        $message = "User could not be created.";
        $message .= "<br>" .print_r($connection->errorInfo());
    }

}


?>

