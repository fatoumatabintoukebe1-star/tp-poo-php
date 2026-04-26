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
}
?>