<h1>Inscription</h1>
<?php
// on récupère le contenu de $POST pour frminscription
// si c'est vide, cela veut dire qu'on vient du formualire
// on teste alors le contenu des différents champs de saisie pour ensuite injecter dans la base
if (isset($_POST['frminscription'])) {
    $nom = $_POST['nom'] ?? "";
    $prenom = $_POST['prenom'] ?? "";
    $mail = $_POST['mail'] ?? "";
    $mdp = $_POST['mdp'] ?? "";

    $erreurs = array();
    if ($nom == "") array_push($erreurs, "merci de saisir un nom");
    if ($prenom == "") array_push($erreurs, "merci de saisir un prénom");
    if ($mail == "") array_push($erreurs, "merci de saisir un mail");
    if ($mdp == "") array_push($erreurs, "merci de saisir un mot de passe");

    if (count($erreurs) > 0) {
        $messageErreur = "<ul>";
        for ($i = 0 ; $i < count($erreurs) ; $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .="</ul>";

        echo $messageErreur;
        include "frminscription.php";
    }
    else {
        // insertion dans la BDD
    }
}
else {
    // on rentre dans le formulaire pour la première fois, alors on affiche le formulaire
    include "frminscription.php";
}