<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/

if(isset($_POST['submit']){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFROM = $_POST['email'];
    $message = $_POST['message'];

    $webmaster_email = "figueroarudy14@gmail.com";
    $headers = "FROM: ".mailFROM;
    $txt = "You have received an email from ".name."\n\n".message;

    mail(webmaster_email, subject, txt, headers);
    header("Location: index.html?mailsend");
}
?>