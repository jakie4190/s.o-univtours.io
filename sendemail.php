<?php
if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Votre adresse e-mail
    $to = "saber.omari@etu.univ-tours.fr";

    // Sujet de l'e-mail
    $subject = "Nouveau message de: $name";

    // Corps de l'e-mail
    $body = "Vous avez reçu un nouveau message de votre site web. \n\n".
            "Nom: $name\n".
            "Email: $email\n".
            "Message: $message";

    // Envoi de l'e-mail
    mail($to, $subject, $body);

    // Redirection vers une page de remerciement
    header('Location: merci.html');
}
?>
