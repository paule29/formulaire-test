<?php
if (isset($_POST['user_mail'])&&!empty($_POST['user_mail'])) {
    # code...
$objet =$_POST['message_topic'];
$email =$_POST['user_mail'];
$message =$_POST['user_message'];

$recipient = 'p.ombiono@codeur.online';
$send = 'message envoyé par' .$email.':' .$message;

$headerFields = array(
    "From: {$email}",
    "MIME-Version: 1.0",
    "Content-Type: text/html;charset=utf-8"
    );

$message=$email.'<br>' .$message;
mail($recipient, $objet, $send , implode("\r\n", $headerFields));

echo 'Votre message a bien été transmis <br>';
echo '<button> <a href="index.php">retour</a> </button>';


} else{
    echo 'Votre n\'a pas été envoyé <br>';
    echo '<button> <a href="index.php">retour</a> </button>';

}



