<?php
require_once ("include/session.php");
require_once ("include/connection.php");
require_once ("include/functions.php");
if(logged_in()){
    redirect_to("logoutpage.php");
}
if(isset($_POST["submit"])){

    $username = trim(htmlspecialchars($_POST['user']));
    $password = trim(htmlspecialchars($_POST['pass']));

    $result = $connection->prepare("SELECT id, user, pass FROM users WHERE user = '{$username}' LIMIT 1");
    $result->execute();
         if (count($result)==1){
            $found_user = $result->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $found_user['pass'])){
                $_SESSION['user_id'] = $found_user['id'];
                $_SESSION['user'] = $found_user['user'];
                redirect_to("index.php");
            }else{
                $message = "User/Pass combination incorrect.<br>";

            }
        }}
        else{
    if(isset($_GET['logout']) && $_GET['logout'] == 1){
        $message = "You are now logged out";
    }
        }

?>