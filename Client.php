<?php 
require_once "utilisateur.php";
class Client extends Utilisateur implements Affichable {
    const TAUX_SIMPLE = 0.05;
    const TAUX_PREMIUM = 0.15;
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
        if ($this->typeClient == "simple") {
        return $montant * self::TAUX_SIMPLE;
    } else if ($this->typeClient == "premium") {
        return $montant * self::TAUX_PREMIUM;
    }

    return 0;
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