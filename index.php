<?php
// Désactivation des magic_quotes_gpc
// ini_set('magic_quotes_gpc', 0);

header('Content-type:application/json;charset=utf-8');


if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty($_POST['message'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        $status = true;
     try {
        $status = mail("de.fressine1986@protonmail.ch", "test", "dgfdfg", $headers);
        echo ($status) ? json_encode(['status' => true]) :  json_encode(['status' => false]);
        //echo json_encode(['status' => $status]);
     } catch (Exception $e) {
        echo json_encode(['status' => $e->getMessage()]);
     }
} else {
    echo json_encode(['status' => false]);
}
