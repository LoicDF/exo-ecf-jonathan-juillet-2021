<?php
// Désactivation des magic_quotes_gpc
// ini_set('magic_quotes_gpc', 0);


    if (!empty($_POST['nom'])&& !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($nom, FILTER_VALIDATE_EMAIL)){

        }
    else{
        echo "Email non valide";
    }    
}
else{
    header('Location:index.html');
    die();
}
?>