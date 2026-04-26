<?php 
require_once "Utilisateur.php";

class Administrateur extends Utilisateur implements Affichable {

    public function __construct($id, $nom, $email, $login, $motDePasse) {

        parent::__construct($id, $nom, $email, $login, $motDePasse);
    }

    public function supprimerUtilisateur($utilisateur) {
        echo "Utilisateur supprimé : " . $utilisateur->getLogin();
    }

    public function afficherRole() {
    echo "Je suis un administrateur<br>";
}
public function afficher() {
    $this->afficherInfos();
    echo "Login : " . $this->login . "<br>";
    echo "Rôle : Administrateur<br>";
}
}
?>