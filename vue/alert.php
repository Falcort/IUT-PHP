<?php
/*
 * Créateur: Thibault SOUQUET
 * Pour le cours de PHP
 * IUT 2017
 */


// On crée une fonction qui affiche de l'html avec deux paramètres, le type de message, et le message lui-même
function alert($classeAlert, $messageAlert)
{
    ?>
    <div class="alert alert-<?php echo $classeAlert; ?>">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $messageAlert; ?></strong>
    </div>
    <?php
}

// Si dans l'url il y a ?message=XXX
// Alors on va afficher un message
if (isset($_GET['message'])) {
    $message = $_GET['message'];
    switch ($message) {
        // On regarde ce qu'il y a dans les ?message=
        // Et en fonction de ça on affiche un message grâce à la fonction afficher au dessus
        case "URL_INVALIDE":
            alert('danger', MESSAGE_URL_INVALIDE);
            break;
        case "CONNECTE":
            if ($_SESSION['logged'] == true) alert('success', MESSAGE_CONNECTE);
            break;
        case "DECONNECTE":
            if (!isset($_SESSION['logged'])) alert('success', MESSAGE_DECONNECTE);
            break;
        case "PAS_CONNECTE":
            alert('danger', MESSAGE_PAS_CONNECTE);
            break;
        case "PASSWORD_INVALIDE":
            alert('danger', MESSAGE_PASSWORD_INVALIDE);
            break;
        case "ACCES_REFUSED":
            alert('danger', ACCES_REFUSER);
            break;
        case "ALREADY_EXIST":
            alert('danger', ALREADY_FILE);
            break;
        case "UPLOAD_SUCCES":
            alert('success', UPLOAD_SUCCES);
            break;
        case "NO_FILE":
            alert('danger', NO_FILE);
            break;
        case "TROP_GROS":
            alert('danger', TROP_GROS);
            break;
        case "ALLOWED_FILES":
            alert('danger', ALLOWED_FILES);
            break;
        case "ERROR":
            alert('danger', ERROR);
            break;
        case "MODIF_SUCCES":
            alert('success', MODIF_SUCCES);
            break;
        case "IMG_DEL":
            alert('success', IMG_DEL);
            break;
        default :
    }
}
