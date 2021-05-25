<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire Test</title>
</head>
<body>
<form action="form.php" method="post"> 
<div>
        <label for="objet"> Objet :</label>
        <input type="text" id="topic" name="message_topic">
    </div>
             <div>
        <label for="destinataire">Votre e-mail :</label>
        <input required type="email" id="mail" name="user_mail">
    </div>
             <div>
            <label for="message">Message:</label>
            <textarea id="message" name="user_message"></textarea>
     </div>
    
    <div>
            <button type="submit">
                Envoyer
            </button>


            <script src="main.js"></script>
</body>
</html>