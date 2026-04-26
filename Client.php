<?php 
require_once "utilisateur.php";
class Client extends Utilisateur{
    private $typeClient;

    public function __construct($id, $nom, $email, $login, $motDePasse, $typeClient) {

        parent::__construct($id, $nom, $email, $login, $motDePasse);

        $this->typeClient = $typeClient;
    }
    public function getTypeClient() {
        return $this->typeClient;
    }

    public function setTypeClient($typeClient) {
        $this->typeClient = $typeClient;
    }

    public function calculerReduction($montant){

    }

    public function afficherInfos() {

    parent::afficherInfos(); 

    echo "Type client : " . $this->typeClient . "<br>";
}
public function afficherRole() {
    echo "Je suis un client<br>";
}
public function afficher() {
    $this->afficherInfos();
    echo "Login : " . $this->login . "<br>";
    echo "Type client : " . $this->typeClient . "<br>";
}
}
?>