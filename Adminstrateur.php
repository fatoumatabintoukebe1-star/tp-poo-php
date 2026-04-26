<?php 
require_once "Utilisateur.php";

class Administrateur extends Utilisateur {

    public function __construct($id, $nom, $email, $login, $motDePasse) {

        parent::__construct($id, $nom, $email, $login, $motDePasse);
    }

    public function supprimerUtilisateur($utilisateur) {
        echo "Utilisateur supprimé : " . $utilisateur->getLogin();
    }
}
?>