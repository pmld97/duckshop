<?php
$email = $_POST['email'];
$message = $_POST['message'];
$name = $_POST ['name'];
$regexp = "/^[^0-9][A-z0-9_-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_-]+)*[.][A-z]{2,4}$/";
if(!isset($_POST['email']))
{
    header("Location: ../contact.php?erid=1");
}elseif (empty($email)||empty($message)){
    header("Location: ../contact.php?erid=2");
}
else{
    //if (!preg_match($regexp,$email)) {
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {

            header("Location: ../contact.php?erid=3");
    }else{
        mail("nazakia97@gmail.com",
    "Email from contactform",
    $message,
    "From: $email");}}