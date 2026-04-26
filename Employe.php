<?php 
require_once "Utilisateur.php";

class Employe extends Utilisateur implements Affichable {

    private $salaire;

    public function __construct($id, $nom, $email, $login, $motDePasse, $salaire) {

        parent::__construct($id, $nom, $email, $login, $motDePasse);

        $this->salaire = $salaire;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    public function calculerSalaireAnnuel() {
        return $this->salaire * 12;
    }

    public function afficherRole() {
    echo "Je suis un employé<br>";
}
public function afficher() {
    $this->afficherInfos();
    echo "Login : " . $this->login . "<br>";
    echo "Salaire : " . $this->salaire . "<br>";
}
}
?>